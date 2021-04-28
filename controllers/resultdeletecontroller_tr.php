<?php
   require_once '../models/db_config.php';
   
   $no=$_GET["no"];

     function deleteResult($no){
		 $query="DELETE FROM teacherresult WHERE no=$no;";
		 execute($query);
	 }   
	 deleteResult($no);
	 
header("location: ../view result_tr.php");
?>