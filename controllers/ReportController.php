<?php


         require_once 'models/db_config.php';
		   $id="";
           $err_id="";
		   
           $snumber="";
           $err_snumber="";
		 
           $tnumber="";
           $err_tnumber="";
		   
		   $pass="";
           $err_pass="";
		
           $fail="";
           $err_fail="";
		   
		   $deprt="";
           $err_deprt="";

           $date="";
	       $err_date="";

		   $hasError=false;
        
       
    
      if($_SERVER["REQUEST_METHOD"]=="POST")
    {
            if(empty($_POST["snumber"])){
                $err_snumber="Number required";
				$hasError=true;
            }
            

            else{   
                $snumber=htmlspecialchars($_POST["snumber"]);

            }

            if(empty($_POST["tnumber"])){
                $err_tnumber="Number required";
				$hasError=true;
            }
            

            else{   
                $tnumber=htmlspecialchars($_POST["tnumber"]);

            }
			
			if(empty($_POST["pass"])){
                $err_pass="Number required";
				$hasError=true;
            }
            

            else{   
                $pass=htmlspecialchars($_POST["pass"]);

            }
			
			if(empty($_POST["fail"])){
                $err_fail="Number required";
				$hasError=true;
            }
            

            else{   
                $fail=htmlspecialchars($_POST["fail"]);

            }

            
            
			
			if(empty($_POST["deprt"])){
                $err_deprt="Select a Department";
				$hasError=true;
            }
            else{
                $deprt=htmlspecialchars($_POST["deprt"]);
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
			
			
	if(isset($_POST["addreport"])){ if(!$hasError){
			insertUser($snumber,$tnumber,$pass,$fail,$deprt,$date);
		    }
	}
			if(isset($_POST["editreport"])){
            
			
			editReport($_GET["id"],$snumber,$tnumber,$pass,$fail,$deprt,$date);
			
			
        }
	}
	
		
		
		 function editReport($id,$snumber,$tnumber,$pass,$fail,$deprt,$date){
		$query = "update report set snumber='$snumber',tnumber='$tnumber',pass='$pass',fail='$fail',department='$deprt',date='$date' where id=$id;";
	execute($query);
	    
		}
		
		
		
		
		function insertUser($snumber,$tnumber,$pass,$fail,$deprt,$date){
	$query = "INSERT INTO report VALUES (NULL,'$snumber','$tnumber','$pass','$fail','$deprt','$date','report')";
	execute($query);
		
	}
	function getAllReports(){
		$query = "SELECT * FROM report";
		$result = get($query);
		return $result;
	}
	function getReport($id){
		$query = "SELECT * FROM report WHERE id=$id";
		$result = get($query);
		if(count($result) > 0){
			return $result[0];
		}
		return false;
	}
	
	
?>