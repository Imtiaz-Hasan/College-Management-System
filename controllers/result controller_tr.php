<?php

    require_once 'models/db_config.php';
		 
		 
	$department="";
    $err_department="";

	$subject="";
	$err_subject="";
	
	
	$section="";
	$err_section ="";
	
	$passed="";
	$err_passed="";
	
	$failed="";
	$err_failed="";
	
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
			
			
			if(empty($_POST["section"]))
			{
                $err_section="section must";
				
				$hasError=true;
            }
			
            else
			{   
                $section=htmlspecialchars($_POST["section"]);
            }
			
			if(empty($_POST["passed"]))
			{
                $err_passed="selection must";
				
				$hasError=true;
            }
			
            else
			{   
                $passed=htmlspecialchars($_POST["passed"]);
            }
			
			if(empty($_POST["failed"]))
			{
                $err_failed="selection must";
				
				$hasError=true;
            }
			
            else
			{   
                $failed=htmlspecialchars($_POST["failed"]);
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
			
	    
		
		
		if(isset($_POST["addresult"]))
			
	       {
			   if(!$hasError)
				
			  {
				   insertResult($department,$subject,$section,$passed,$failed,$date);
		     }
		   }
				
	}

		function insertResult($department,$subject,$section,$passed,$failed,$date)
		{
	      $query = "INSERT INTO teacherresult VALUES (NULL,'$department','$subject','$section','$passed','$failed','$date')";
		   $query;
	      execute($query);
	    }
		
		
		function getViewResult()
		{
			
		    $query = "SELECT * FROM teacherresult";
		    $result = get($query);
			
		    return $result;
	    }
		
		
		
		if(isset($_POST["editresult"]))
		{
			
		    editResult($_GET["no"],$department,$subject,$section,$passed,$failed,$date);
	    }
	
	function editResult($no,$department,$subject,$section,$passed,$failed,$date)
	{
		$query = "update teacherresult set department='$department',subject='$subject',section='$section',passed='$passed',failed='$failed',date='$date' where no=$no;";
		execute($query);
		
	}
	
	function getResult($no){
		$query = "SELECT * FROM teacherresult WHERE no=$no";
		$result = get($query);
		if(count($result) > 0){
			return $result[0];
		}
		return false;
	}
	
		
    function checkResult($key){
		$query = "select subject,no from teacherresult where subject like '%$key%'";
	
		$result = get($query);
		
		return $result;		
	}		
		
?>
