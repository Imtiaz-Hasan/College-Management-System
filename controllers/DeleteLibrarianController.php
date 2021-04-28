<?php
   require_once '../models/db_config.php';
   $id=$_GET["id"];

     function deleteLibrarianInfo($id){
		 $query="DELETE FROM librarian WHERE id=$id;";
		 execute($query);
	 }   
	 deleteLibrarianInfo($id);
	 
	 header("location: ../View Librarian.php");
?>