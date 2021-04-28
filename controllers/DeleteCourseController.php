<?php
   require_once '../models/db_config.php';
   $id=$_GET["id"];

     function deleteCourseInfo($id){
		 $query="DELETE FROM course WHERE id=$id;";
		 execute($query);
	 }   
	 deleteCourseInfo($id);
	 
	 header("location: ../View Course.php");
?>