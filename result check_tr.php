<?php
	require_once  'controllers/result controller_tr.php';
	
	$key = $_GET["key"];
	
	 $results=checkResult($key);
	 
	foreach($results as $result)
	{
		echo "<a href='editresult_tr.php?no=".$result["no"]."'>".$result["subject"]."<a><br>";
	}
?>