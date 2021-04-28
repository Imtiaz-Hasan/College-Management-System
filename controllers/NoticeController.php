<?php


         require_once 'models/db_config.php';
		   $id="";
           $err_id="";
		   
           $name="";
           $err_name="";
		 
           
		
           
		   

           $date="";
	       $err_date="";

           $description="";
           $err_description="";
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
			if(empty($_POST["tarea"]))
			{
                $err_description="Selection must";
				$hasError=true;
            }
            else
			{
                $description=htmlspecialchars($_POST["tarea"]);
            } 
			
			/*if(empty($_POST["image"])){
		        $err_image="<br>Image Required";
		         $hasError=true;
	          }
	          else{
		       $image=$_POST["image"];}
	          }*/
			
			
	       if(isset($_POST["addnotice"])){ if(!$hasError){
			insertUser($name,$date,$description);
		    }
	}
			if(isset($_POST["editnotice"])){
            
			
			editNotice($_GET["id"],$name,$date,$description);
			
			
        }
	}
	
		
		
		 function editNotice($id,$name,$date,$description){
		$query = "update notice set name='$name',date='$date',description='$description' where id=$id;";
	execute($query);
	    
		}
		
		
		
		
		function insertUser($name,$date,$description){
	$query = "INSERT INTO notice VALUES (NULL,'$name','$date','$description','notice')";
	execute($query);
		
	}
	function getAllNotices(){
		$query = "SELECT * FROM notice";
		$result = get($query);
		return $result;
	}
	function getNotice($id){
		$query = "SELECT * FROM notice WHERE id=$id";
		$result = get($query);
		if(count($result) > 0){
			return $result[0];
		}
		return false;
	}
	
	
	
?>