<?php
   require_once '../models/db_config.php';
   $no=$_GET["no"];

     function deleteNote($no){
		 $query="DELETE FROM teachernotes WHERE no=$no;";
		 execute($query);
	 }   
	 deleteNote($no);
	 
header("location: ../view note_tr.php");
?>