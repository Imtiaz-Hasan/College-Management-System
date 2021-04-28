<?php
	require_once  'controllers/notice controller_tr.php';
	
	$key = $_GET["key"];
	
	 $notices=checkNotice($key);
	 
	foreach($notices as $notice)
	{
		echo "<a href='editnotice_tr.php?no=".$notice["no"]."'>".$notice["title"]."<a><br>";
	}
?>