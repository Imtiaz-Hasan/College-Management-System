<?php 
      include "controllers/LogoutController.php";
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
	          <form action="" method="post">  
		         
				 <div class="center-login">
			 <table align="center">
			 
			    
			    <tr>
				    <td><h1 align="center" style="color: white; text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;">Admin <?php echo $_SESSION["user"];?></h1></td>
					
				</tr>
				</table>
				<table align="center">
				
				<tr>
				    <li ><a href="My Profile.php">My Profile</li>
				    <li ><a href="Add Student.php" >Add Student</li>
				    <li ><a href="Add Teacher.php" >Add Teacher</li>
					<li ><a href="Add Librarian.php" >Add Librarian</li>
					<li ><a href="Add Notice.php" >Add Notice</li>
					<li ><a href="Add Report.php" >Add Report</li>
					<li ><a href="Add Course.php" >Add Course</li>
					<li ><a href="View Student.php" >View Student</li>
					<li ><a href="View Teacher.php" >View Teacher</li>
					<li ><a href="View Librarian.php" >View Librarian</li>
					<li ><a href="View Notice.php" >View Notice</li>
					<li ><a href="View Report.php" >View Report</li>
					<li ><a href="View Course.php" >View Course</li>
					<li ><a href="Search.php" >Search</li>
				</tr>
				
			 </table>
			
			
			<div align="left"> 
				<input type="submit" class="btn btn-danger" id="logoutButton" name="logoutButton" value="Logout"></div>
	       </div>
	   </form>    
	</body>
</html>