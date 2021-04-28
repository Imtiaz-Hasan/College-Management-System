<?php 
      
	session_start();
	if(!isset($_SESSION["user"])){
		header("Location: login.php");
	}

?>

<html>
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="styles/style.css">
	</head>
	    <body>
	            
		         
				 <div class="center-login">
			 <table align="center">
			 
			    <tr>
				    <td><h1 align="center" style="font-family:cambria">Search <?php echo $_SESSION["user"];?></h1></td>
					
				</tr>
				</table>
				<table align="center">
				
				<tr>
				    <li ><a href="SearchAdmin.php" >Search Admin</li>
				    <li ><a href="SearchStudent.php" >Search Student</li>
				    <li ><a href="SearchTeacher.php" >Search Teacher</li>
					<li ><a href="SearchLibrarian.php" >Search Librarian</li>
					
				</tr>
				
			 </table>
			
			 <a href="admin_front.php" align="right" name="logoutBtn" class="btn btn-danger">Back</a>
			</div>
	            
	</body>
</html>