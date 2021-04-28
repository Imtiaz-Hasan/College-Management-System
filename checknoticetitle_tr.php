<?php
	require 'controllers/notice controller_tr.php';
	
	$topic = $_GET["title"];
	
	$rs = checkTitle($topic);
	
	if($rs)
	{
		echo "true";
	}
	else echo "false";
?>