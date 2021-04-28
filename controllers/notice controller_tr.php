<?php

    require_once 'models/db_config.php';

    $department="";
    $err_department="";

	$subject="";
	$err_subject="";
	
	
	$section="";
	$err_section ="";
	
	
	$title="";
	$err_title="";
	
	$description="";
    $err_description="";
	
	
	$date="";
	$err_date="";
	
	$no="";
	$err_no="";
	
	$hasError=false;
	
	
	  if($_SERVER["REQUEST_METHOD"]=="POST")
		{
			
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
			
			
			if(empty($_POST["title"]))
			{
                $err_title="Selection must";
				
				$hasError=true;
            }
			else if(strlen($_POST["title"]) < 8)
			{
                $err_title="More than 8 characters";
				
				$hasError=true;
            }

            else
			{   
                $title=htmlspecialchars($_POST["title"]);
            }
			
			
			if(empty($_POST["tarea"]))
			{
                $err_description="Required";
				$hasError=true;
            }
            else
			{
                $description=htmlspecialchars($_POST["tarea"]);
            } 
			
			if(!isset($_POST["day"]) || !isset($_POST["month"]) || !isset($_POST["year"]))
			{
				$err_date="Date required";
				
				$hasError=true;
			}
			else
			{
				$date=htmlspecialchars($_POST["day"]."-".$_POST["month"]."-".$_POST["year"]);
			}
			
			
			if(isset($_POST["addnotice"]))
			{
				if(!$hasError)
			{
			   insertNotice($department,$subject,$section,$title,$description,$date);
		    }
			}
			
	    }
		
		
		function insertNotice($department,$subject,$section,$title,$description,$date)
		{
	      $query = "INSERT INTO teachernotice VALUES (NULL,'$department','$subject','$section','$title','$description','$date')";
	
	       execute($query);
		
	    }
		function getViewNotice(){
		$query = "SELECT * FROM teachernotice";
		$result = get($query);
		return $result;
	}
		
		
		
		if(isset($_POST["editnotice"])){
		editNotice($_GET["no"],$department,$subject,$section,$title,$description,$date);
	}
	function editNotice($no,$department,$subject,$section,$title,$description,$date)
	{
		$query = "update teachernotice set department='$department',subject='$subject',section='$section',title='$title',description='$description',date='$date' where no=$no;";
		execute($query);
		
	}
	
	function getNotice($no){
		$query = "SELECT * FROM teachernotice WHERE no=$no";
		$result = get($query);
		if(count($result) > 0){
			return $result[0];
		}
		return false;
	}
	function checkTitle($title){
		$query = "select * from teachernotice where title='$title'";
	
		$result = get($query);
		if(count($result) > 0){
			return false;
		}
		return true;		
	}
	 function checkNotice($key){
		$query = "select title,no from teachernotice where title like '%$key%'";
	
		$result = get($query);
		
		return $result;		
	}
		
?>