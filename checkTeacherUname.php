<?php
	require 'controllers/TeacherController.php';
	$username = $_GET["uname"];
	$rs = checkUsername($username);
	if($rs){
		echo "true";
	}
	else echo "false";
?>