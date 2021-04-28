<?php
   require_once '../models/db_config.php';
   
   $no=$_GET["no"];

     function deleteNotice($no)
	 {
		 $query="DELETE FROM teachernotice WHERE no=$no;";
		 
		 execute($query);
	 }   
	 deleteNotice($no);
	 
header("location: ../view notice_tr.php");
?>