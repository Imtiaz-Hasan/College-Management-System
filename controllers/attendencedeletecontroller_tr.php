<?php
   require_once '../models/db_config.php';
   $no=$_GET["no"];

     function deleteAttendence($no){
		 $query="DELETE FROM teacherattendence WHERE no=$no;";
		 execute($query);
	 }   
	 deleteAttendence($no);
	 
header("location: ../view attendence_tr.php");
?>