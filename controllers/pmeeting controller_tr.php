<?php

       require_once 'models/db_config.php';
	   
	   $date="";
	   $err_date="";
	   
	   $name="";
	   $err_name="";
		
	   $department="";
	   $err_department="";
	
	
	
	   $section="";
	   $err_section ="";
	 
	
        $topic="";
        $err_topic="";
		
		
		
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
			
			if(empty($_POST["name"]))
			{
                $err_name="Selection must";
				
				$hasError=true;
            }
			
            else
			{   
                $name=htmlspecialchars($_POST["name"]);
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
			
		if(isset($_POST["addpmeeting"]))
			{
				if(!$hasError)
			{
			   insertPmeeting($date,$name,$department,$section,$topic);
		    }
			
		}	
		
	}
		
		function insertPmeeting($date,$name,$department,$section,$topic)
		{
	       $query = "INSERT INTO teacherpmeeting VALUES (NULL,'$date','$name','$department','$section','$topic')";
	
	       execute($query);
		
	    }
		
		function getViewPmeeting(){
		$query = "SELECT * FROM teacherpmeeting";
		$result = get($query);
		return $result;
	}
		
		
		
		if(isset($_POST["editpmeeting"])){
		editPmeeting($_GET["no"],$date,$name,$department,$section,$topic);
	}
	function editPmeeting($no,$date,$name,$department,$section,$topic)
	{
		 $query = "update teacherpmeeting set date='$date',name='$name',department='$department',section='$section',topic='$topic' where no=$no;";
		execute($query);
		
	}
	
	function getPmeeting($no){
		$query = "SELECT * FROM teacherpmeeting WHERE no=$no";
		$result = get($query);
		if(count($result) > 0){
			return $result[0];
		}
		return false;
	}	

	 
?>