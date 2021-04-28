
<?php
     if(isset($_POST["logoutbtn"])){
		 
        session_start();
		
        session_destroy();
       header("Location: confirm_tr.php"); 
    }

?>