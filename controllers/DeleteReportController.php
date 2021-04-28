<?php
   require_once '../models/db_config.php';
   $id=$_GET["id"];

     function deleteReportInfo($id){
		 $query="DELETE FROM report WHERE id=$id;";
		 execute($query);
	 }   
	 deleteReportInfo($id);
	 
	 header("location: ../View Report.php");
?>