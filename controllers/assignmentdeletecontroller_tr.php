<?php
   require_once '../models/db_config.php';
   
   $no=$_GET["no"];

     function deleteAssignment($no)
	 {
		 $query="DELETE FROM teacherassignment WHERE no=$no;";
		 
		 execute($query);
	 }   
	 deleteAssignment($no);
	 
header("location: ../view assignment_tr.php");
?>