<?php


         require_once 'models/db_config.php';
		   $id="";
           $err_id="";
		   
           $name="";
           $err_name="";

           $date="";
	       $err_date="";

		   $hasError=false;
        
       
    
      if($_SERVER["REQUEST_METHOD"]=="POST")
    {
            if(empty($_POST["name"])){
                $err_name="Name required";
				$hasError=true;
            }
            

            else{   
                $name=htmlspecialchars($_POST["name"]);

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
			
			
	if(isset($_POST["addcourse"])){ if(!$hasError){
			insertUser($name,$date);
		    }
	}
			if(isset($_POST["editcourse"])){
            
			
			editCourse($_GET["id"],$name,$date);
			
			
        }
	}
	
		
		
		 function editCourse($id,$name,$date){
		$query = "update course set name='$name',date='$date' where id=$id;";
	execute($query);
	    
		}
		
		
		
		
		function insertUser($name,$date){
	$query = "INSERT INTO course VALUES (NULL,'$name','$date','course')";
	execute($query);
		
	}
	function getAllCourses(){
		$query = "SELECT * FROM course";
		$result = get($query);
		return $result;
	}
	function getCourse($id){
		$query = "SELECT * FROM course WHERE id=$id";
		$result = get($query);
		if(count($result) > 0){
			return $result[0];
		}
		return false;
	}
	
	function updateCourse(){}
	
?>