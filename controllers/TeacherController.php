<?php


         require_once 'models/db_config.php';
		   $id="";
           $err_id="";
		   
           $name="";
           $err_name="";
		 
           $uname="";
           $err_uname="";
		   
		   
		
           $pass="";
           $err_pass="";
		
           $err_upass="";
           $err_lpass="";
		
           $err_npass="";
           $err_spass="";

           $cpass="";
           $err_cpass="";
		   
		   $deprt="";
           $err_deprt="";

           $mail="";
           $err_mail="";
		
           $phone="";
           $err_phone="";
		
           
		   

           $date="";
	       $err_date="";

           $gender="";
           $err_gender="";
		   $hasError=false;
        
       
    
      if($_SERVER["REQUEST_METHOD"]=="POST")
    {
            if(empty($_POST["name"])){
                $err_name="Name required";
				$hasError=true;
            }
            else if(strlen($_POST["name"]) < 6){
                $err_name="More than 6 characters";
				$hasError=true;
            }

            else{   
                $name=htmlspecialchars($_POST["name"]);

            }

            if(empty($_POST["uname"])){
                $err_uname="User name required";
				$hasError=true;
            }
            else if(strlen($_POST["uname"]) < 6){
                $err_uname="More than 6 characters";
				$hasError=true;
            }
            else if(strpos($_POST["uname"]," ")){
                $err_uname="Space not allowed";
				$hasError=true;
            }

            else{   
                $uname=$_POST["uname"];

            }
            $up=$_POST["pass"];
            for($i=0;$i<strlen($up);$i++){
                if(ctype_upper($up[$i])){
                    $upt=true;
                    break;
                }
                else{
                    $upt=false;
                }
            }
            $low=$_POST["pass"];
            for($i=0;$i<strlen($up);$i++){
                if(ctype_lower($up[$i])){
                    $lowt=true;
                    break;
                }
                else{
                    $lowt=false;
                }
            }
			
			
			
            $low=$_POST["pass"];
            for($i=0;$i<strlen($up);$i++){
                if(is_numeric($up[$i])){
                    $numt=true;
                    break;
                }
                else{
                    $numt=false;
                }
            }
        
            if(strpos($_POST["pass"],"-")||strpos($_POST["pass"],".")){
                    $sp=true;
            }
            else{
                $sp=false;
            }


            if(empty($_POST["pass"])){
                $err_pass="Password required";
				$hasError=true;
                
            }
            else if(strlen($_POST["pass"])<8){
                $err_pass="Password must have more than 8 characters";
				$hasError=true;
            }
            else if(strpos($_POST["pass"]," ")){
                $err_pass="Space not allowed";
				$hasError=true;
            }
            
            else if($upt==false){
                $err_upass="Password must have an Uppercase letter";
				$hasError=true;
            }
            else if($lowt==false){
                $err_lpass="Password must have a Lowercase letter";
				$hasError=true;
            }
            else if($numt==false){
                $err_npass="Password must have contain a Number";
				$hasError=true;
            }
            else if($sp==false){
                $err_spass="Password must contain special character (-) or (.)";
				$hasError=true;
            }

            else{   
                $pass=htmlspecialchars($_POST["pass"]);
				

            }


            if(empty($_POST["cpass"])){
                $err_cpass="Enter password again";
				$hasError=true;
                
            }
            else if($_POST["cpass"]!=$pass){
                $err_cpass="Password not matched";
				$hasError=true;
            }
			else{   
                $cpass=htmlspecialchars($_POST["cpass"]);

            }
			
			if(empty($_POST["deprt"])){
                $err_deprt="Select a Department";
				$hasError=true;
            }
            else{
                $deprt=htmlspecialchars($_POST["deprt"]);
            }


            if(empty($_POST["mail"])){
                $err_mail="E-mail required";
				$hasError=true;
            }
            else if(!strpos($_POST["mail"],"@")){
                $err_mail="Must contain @";
				$hasError=true;
            }
            else{   
                $mail=htmlspecialchars($_POST["mail"]);

            }
			
			

            if(empty($_POST["phone"])){
                $err_phone="Enter phone number";
				$hasError=true;
                
            }
            else if(!is_numeric($_POST["phone"]) ){
                $err_phone="Letters not allowed";
				$hasError=true;

            }
            else{
                $phone=$_POST["phone"];
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
			if(empty($_POST["gender"])){
                $err_gender="Select a gender";
				$hasError=true;
            }
            else{
                $gender=$_POST["gender"];
            }
			
	if(isset($_POST["addteacher"])){ if(!$hasError){
			insertUser($name,$uname,$pass,$cpass,$deprt,$mail,$phone,$date,$gender);
		    }
	}
			if(isset($_POST["editteacher"])){
            
			
			editTeacher($_GET["id"],$name,$uname,$pass,$cpass,$deprt,$mail,$phone,$date,$gender);
			
			
        }
	}
	
		
		
		 function editTeacher($id,$name,$uname,$pass,$cpass,$deprt,$mail,$phone,$date,$gender){
		$query = "update teacher set name='$name',username='$uname',password='$pass',confirmpassword='$cpass',department='$deprt',email='$mail',phone='$phone',date='$date',gender='$gender' where id=$id;";
	execute($query);
	    
		}
		
		
		
		
		function insertUser($name,$uname,$pass,$cpass,$deprt,$mail,$phone,$date,$gender){
	$query = "INSERT INTO teacher VALUES (NULL,'$name','$uname','$pass','$cpass','$deprt','$mail','$phone','$date','$gender','teacher')";
	execute($query);
		
	}
	function getAllTeachers(){
		$query = "SELECT * FROM teacher";
		//$query = "SELECT p.*,c.name as 'c_name' FROM products p left join categories c on p.category_id = c.id";
		$result = get($query);
		return $result;
	}
	function getTeacher($id){
		$query = "SELECT * FROM teacher WHERE id=$id";
		$result = get($query);
		if(count($result) > 0){
			return $result[0];
		}
		return false;
	}
	
	function checkUsername($uname){
		$query = "select * from teacher where username='$uname'";
	
		$result = get($query);
		if(count($result) > 0){
			return false;
		}
		return true;		
	}
	
?>