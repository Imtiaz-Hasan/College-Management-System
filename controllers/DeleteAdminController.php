<?php
   require_once '../models/db_config.php';
   $id=$_GET["id"];

     function deleteAdminInfo($id){
		 $query="DELETE FROM users WHERE id=$id;";
		 execute($query);
	 }   
	 deleteAdminInfo($id);
	 
	 header("location: ../My Profile.php");
?>