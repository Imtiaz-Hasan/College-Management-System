<?php
   require_once '../models/db_config.php';
   $id=$_GET["id"];

     function deleteTeacherInfo($id){
		 $query="DELETE FROM teacher WHERE id=$id;";
		 execute($query);
	 }   
	 deleteTeacherInfo($id);
	 
	 header("location: ../View Teacher.php");
?>