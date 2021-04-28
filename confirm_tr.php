<?php
include "controllers/logout controller_tr.php";
	session_start();
	
	
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
				    <td><h1 align="center" >Welcome Mehjabin<?php echo $_SESSION["user"];?></h1></td>
				</tr>
				
				
				</table>
				<table align="center">
			<tr>
			
			    <li class="plain-bullet"><a href="profile info_tr.php">Profile Information</li>
				<li class="plain-bullet"><a href="add assignment_tr.php">Add Assignment</li>
				<li class="plain-bullet"><a href="add note_tr.php">Upload Notes</li>
				<li class="plain-bullet"><a href="add attendence_tr.php">Add Attendence</li>
				<li class="plain-bullet"><a href="add result_tr.php">Add Result</li>
				<li class="plain-bullet"><a href="add notice_tr.php">Add Notices</li>
				<li class="plain-bullet"><a href="add pmeeting_tr.php">Add Parents Meeting</li>
                <li class="plain-bullet"><a href="view assignment_tr.php">View Assignment</li>
				<li class="plain-bullet"><a href="view note_tr.php">View Notes</li>
				<li class="plain-bullet"><a href="view attendence_tr.php">View Attendence</li>
				<li class="plain-bullet"><a href="view result_tr.php">View Result</li>
				<li class="plain-bullet"><a href="view notice_tr.php">View Notices</li>
				<li class="plain-bullet"><a href="view pmeeting_tr.php">View Parents Meeting</li>
				
				
			</tr>
		</table>
		<div align="left">
					  <a href="login_tr.php" align="right" id="logoutbtn" name="logoutbtn" class="btn btn-primary">Log out</a></div>
		</div>
		</form>
		
		
					
		
		    
	</body>
	
</html>
		
		