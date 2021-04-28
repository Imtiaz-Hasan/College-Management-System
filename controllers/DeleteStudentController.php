<?php
   require_once '../models/db_config.php';
   $id=$_GET["id"];

     function deleteStudentInfo($id){
		 $query="DELETE FROM student WHERE id=$id;";
		 execute($query);
	 }   
	 deleteStudentInfo($id);
	 
	 header("location: ../View Student.php");
?>