<?php
   require_once '../models/db_config.php';
   $id=$_GET["id"];

     function deleteNoticeInfo($id){
		 $query="DELETE FROM notice WHERE id=$id;";
		 execute($query);
	 }   
	 deleteNoticeInfo($id);
	 
	 header("location: ../View Notice.php");
?>