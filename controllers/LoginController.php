<?php
    require_once 'models/db_config.php';
    $name="";
	$err_name="";
	$username="";
	$err_uname="";
	$password="";
	$err_pass="";
	$email="";
	$err_mail="";
	$address="";
	$err_address="";
	$gender="";
	$err_gender="";
	
	$hasError=false;
	
	if(isset($_POST["login"])){
		if(empty($_POST["username"])){
			$err_uname="Username Required";
			$hasError=true;
		}
		else{
			$username=htmlspecialchars($_POST["username"]);
		}
		if(empty($_POST["password"])){
			$err_pass="Password Required";
			$hasError=true;
		}
		else{
			$password=htmlspecialchars($_POST["password"]);
		}
		
		
		if($user = authenticateUser($_POST["username"],$_POST["password"])){
			session_start();
			$_SESSION["user"]=$user["username"];
			//setcookie("user",$username,time()+1000,"/");
			header("Location: admin_front.php");
			
		}
		else{
			echo "Invalid username or password";
		}
		/*if(!$hasError){
			header("Location: admin_front.php");
		}*/
	}
	if(isset($_POST["sign_up"])){
		if(empty($_POST["name"])){
			$err_name="<br>Name Required";
			$hasError=true;
		}else{
			$name=$_POST["name"];
		}
		if(empty($_POST["username"])){
			$err_uname="<br>Username Required";
			$hasError=true;
		}else{
			$username=$_POST["username"];
		}
		
		if(empty($_POST["email"])){
			$err_mail="<br>Email Required";
			$hasError=true;
		}else{
			$email=$_POST["email"];
		}
		
		if(empty($_POST["password"])){
			$err_pass="<br>Password Required";
			$hasError=true;
		}else{
			$password=$_POST["password"];
		}if(empty($_POST["address"])){
			$err_address="<br>Address Required";
			$hasError=true;
		}else{
			$address=$_POST["address"];
		}
		if(empty($_POST["gender"])){
			$err_gender="<br>Gender Required";
			$hasError=true;
		}else{
			$gender=$_POST["gender"];
		}
		if(!$hasError){
			insertUser($name,$username,$email,$password,$address,$gender);
		}
	}
	function insertUser($name,$username,$email,$password,$address,$gender){
		$query = "INSERT INTO users VALUES (NULL,'$name','$username','$email','$password','$address','$gender')";
		execute($query);
		
	}
	function authenticateUser($username,$password){
		$query = "SELECT * FROM users WHERE username='$username' and password='$password'";
		$result = get($query);
		if(count($result)>0){
			return $result[0];
		}
		return false;
	}
	function getMyProfiles(){
		$query = "SELECT * FROM users";
		$result = get($query);
		return $result;
	}
	function checkUsername($username){
		$query = "select * from users where username='$username'";
		$result = get($query);
		if(count($result) > 0){
			return false;
		}
		return true;		
	}
	
?>