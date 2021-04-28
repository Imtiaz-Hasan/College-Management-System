<?php

    require_once 'models/db_config.php';
	
	$uname="";
	$err_uname="";
	$pass="";
	$err_pass="";
	$hasError=false;
	
	
	if(isset($_POST["login"])){
		if(empty($_POST["uname"])){
			$err_uname="Username Required";
			$hasError=true;
		}
		else{
			$uname=htmlspecialchars($_POST["uname"]);
		}
		if(empty($_POST["pass"])){
			$err_pass="Password Required";
			$hasError=true;
		}
		else{
			$pass=htmlspecialchars($_POST["pass"]);
		}
		
		
		if($user = authenticateUser($_POST["uname"],$_POST["pass"])){
			session_start();
			$_SESSION["user"]=$user["uname"];
			header("Location: confirm_tr.php");
			
		}
		else{
			echo "Invalid username or password";
		}
		
	}
	function authenticateUser($uname,$pass){
		$query = "SELECT * FROM teacher WHERE username='$uname' and password='$pass'";
		$result = get($query);
		if(count($result)>0){
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