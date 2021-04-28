<?php
	require 'controllers/LoginController.php';
	$uname = $_GET["username"];
	$rs = checkUsername($uname);
	if($rs){
		echo "true";
	}
	else echo "false";
?>