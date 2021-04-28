<?php 
      include 'main_header.php';
      require_once 'controllers/LoginController.php';

?>
<html>
<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="styles/style.css">
	</head>
	
	<body>
		
		<div class="center-login">
			<div align="center">
				
					<img src="resources/download.jpg" width="160px" height="150px">
					<h1 align="center" style="font-family:cambria">Admin Form</h1>
				
			</div>
			
			<form action="" onsubmit="return validate()" method="post">
				
					
						
						
						<div class="form-group">
						<tr>
						<td><span >Username:</span></td>
						
						<td><input type="text" name="username" id="username" placeholder ="User Name"><span <?php echo $username;?> id="err_uname"></span>
						    <br><span><?php echo $err_uname;?></span>
						</td>
					 </tr>
					</div>
					
					
						
						
						<div class="form-group">
						<tr>
						<td><span>Password:</span></td>
						
						<td><input type="password" name="password" id="password" placeholder ="Password"><span <?php echo $password;?> id="err_pass"></span><br>
						    <br><span><?php echo $err_pass;?></span>
						
						</td>
					</tr>
				</div>
						
					
					<div class="form-group text-center">
						<td colspan="2"><input class="btn btn-primary" type="submit" name="login" value="Login" class="form-control"></td>
					</div>
					
				
			</form>
			<div class="form-group text-right">
			<a href="Home.php"  class="btn btn-danger">Back</a>
			</div>
					<div class="form-group text-center">
			           <a href="signup.php" >Not registered yet? Sign Up</a>
		            </div>
			
		</div>
		
		
	</body>
	
	<script src="js/UserValidation.js"></script>
</html>

