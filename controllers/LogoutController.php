
<?php
     if(isset($_POST["logoutButton"])){
		 
        session_start();
		
        session_destroy();
       header("Location: login.php"); 
    }

?>