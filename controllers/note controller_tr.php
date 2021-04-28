<?php

       require_once 'models/db_config.php';
	   
	   $date="";
	   $err_date="";
		
	   $department="";
	   $err_department="";
	
	
	   $subject="";
	   $err_subject="";
	
	
	   $section="";
	   $err_section ="";
	 
	
        $topic="";
        $err_topic="";
		
		$description="";
        $err_description="";
		
		$no="";
		$err_no="";
		
		$hasError=false;
		
	
		
		if($_SERVER["REQUEST_METHOD"]=="POST")
		{
			
			if(!isset($_POST["day"]) || !isset($_POST["month"]) || !isset($_POST["year"]))
			{
				$err_date="Date required";
				$hasError=true;
			}
			else
			{
				$date=htmlspecialchars($_POST["day"]."-".$_POST["month"]."-".$_POST["year"]);
			}
			
			if(empty($_POST["department"]))
			{
                $err_department="department must";
				
				$hasError=true;
            }
			
            else
			{   
                $department=htmlspecialchars($_POST["department"]);
            }
			
			
			if(empty($_POST["subject"]))
			{
                $err_subject="Selection must";
				$hasError=true;
            }
            else
			{
                $subject=htmlspecialchars($_POST["subject"]);
            }
			
			
			if(!isset($_POST["section"]))
			{
                $err_section="Selection must";
				
				$hasError=true;
            }
            else
			{
                $section=$_POST["section"];
            }
			
		
		    if(empty($_POST["topic"]))
		
			{
                $err_topic="Selection must";
				
				$hasError=true;
            }
			else if(strlen($_POST["topic"]) < 5)
			{
                $err_topic="More than 5 characters";
				
				$hasError=true;
            }

            else
			{   
                $topic=htmlspecialchars($_POST["topic"]);

            }
			
			if(empty($_POST["description"]))
			{
                $err_description="selection must";
				
				$hasError=true;
            }
			
            else
			{   
                $description=htmlspecialchars($_POST["description"]);
            }
			
			
			
			if(isset($_POST["addnote"]))
			{
				if(!$hasError)
			{
			   insertNote($date,$department,$subject,$section,$topic,$description);
		    }
			
		}	
		
	}
		
		function insertNote($date,$department,$subject,$section,$topic,$description)
		{
	       $query = "INSERT INTO teachernotes VALUES (NULL,'$date','$department','$subject','$section','$topic','$description')";
	
	       execute($query);
		
	    }
		
		function getViewNote(){
		$query = "SELECT * FROM teachernotes";
		$result = get($query);
		return $result;
	}
		
		
		
		if(isset($_POST["editnote"])){
		editNote($_GET["no"],$date,$department,$subject,$section,$topic,$description);
	}
	function editNote($no,$date,$department,$subject,$section,$topic,$description)
	{
		 $query = "update teachernotes set date='$date',department='$department',subject='$subject',section='$section',topic='$topic',description='$description' where no=$no;";
		execute($query);
		
	}
	
	function getNote($no){
		$query = "SELECT * FROM teachernotes WHERE no=$no";
		$result = get($query);
		if(count($result) > 0){
			return $result[0];
		}
		return false;
	}	

	 
?>