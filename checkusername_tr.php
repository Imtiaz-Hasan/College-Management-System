<?php
	require 'controllers/login controller_tr.php';
	
	$username = $_GET["uname"];
	
	$rs = checkUsername($username);
	
	if($rs)
	{
		echo "true";
	}
	else echo "false";
?>