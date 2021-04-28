<?php
    
	require_once 'models/db_config.php';
	
    $department="";
    $err_department="";

	$subject="";
	$err_subject="";
	
	
	$section="";
	$err_section ="";
	
	$present="";
	$err_present="";
	
	$absent="";
	$err_absent="";
	
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
			
			
			if(empty($_POST["present"]))
			{
                $err_present="selection must";
				
				$hasError=true;
            }
			
            else
			{   
                $present=htmlspecialchars($_POST["present"]);
            }
			
			if(empty($_POST["absent"]))
			{
                $err_absent="selection must";
				
				$hasError=true;
            }
			
            else
			{   
                $absent=htmlspecialchars($_POST["absent"]);
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
			
			
			
			
			
			if(isset($_POST["addattendence"]))
			
	       {
			   if(!$hasError)
				
			  {
				   insertAttendence($department,$subject,$section,$present,$absent,$date);
		     }
		   }
				
	}

		function insertAttendence($department,$subject,$section,$present,$absent,$date)
		{
	      $query = "INSERT INTO teacherattendence VALUES (NULL,'$department','$subject','$section','$present','$absent','$date')";
		   $query;
	      execute($query);
	    }
		
		
		function getViewAttendence()
		{
			
		    $query = "SELECT * FROM teacherattendence";
		    $result = get($query);
			
		    return $result;
	    }
		
		
		
		if(isset($_POST["editattendence"]))
		{
			
		    editAttendence($_GET["no"],$department,$subject,$section,$present,$absent,$date);
	    }
	
	function editAttendence($no,$department,$subject,$section,$present,$absent,$date)
	{
		$query = "update teacherattendence set department='$department',subject='$subject',section='$section',present='$present',absent='$absent',date='$date' where no=$no;";
		execute($query);
		
	}
	
	function getAttendence($no){
		$query = "SELECT * FROM teacherattendence WHERE no=$no";
		$result = get($query);
		if(count($result) > 0){
			return $result[0];
		}
		return false;
	}
	
		

			
		
?>
