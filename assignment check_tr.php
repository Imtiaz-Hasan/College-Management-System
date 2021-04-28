<?php
	require_once  'controllers/assignment controller_tr.php';
	
	$key = $_GET["key"];
	
	 $assignments=checkAssignment($key);
	 
	foreach($assignments as $assignment)
	{
		echo "<a href='editassignment_tr.php?no=".$assignment["no"]."'>".$assignment["title"]."<a><br>";
	}
?>