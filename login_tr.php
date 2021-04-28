

<?php include 'main_header.php';
      require_once 'controllers/login controller_tr.php';
	  
	 
?>
	
<html>
	<head>
		<link rel="stylesheet" href="styles/mystyle.css">
	</head>
	
	
	    <body>
		<div class="header"></div>
		
	         
		        	<div class="login-div">
				<table align="center">
				
				<tr>
					<td><img src="resources/login_tr.png" width="150px" height="150px"></td>
					
					<td><h1 align="center" style="font-family:cambria">Teacher Login</h1></td>
				</tr>
			</table>
			
			<form action="" onsubmit="return validate()" method="post">
			    
				<table align="center">
					<tr>
						<td><span class="my-font">Username:</span></td>
						
						
						
						<td><input  type="text" name="uname"  onfocusout="checkUsername(this)" class="my-font my-text-field" id="uname"><span <?php echo $uname;?> id="err_uname"></span>
						    <br><span id="err_uname"><?php echo $err_uname;?></span>
						</td>
					 </tr>
					<tr>
						<td><span class="my-font">Password:</span></td>
						
						<td><input class="my-text-field my-font" type="password" name="pass" id="pass"><span <?php echo $pass;?> id="err_pass"></span><br>
						    <br><span class="err-msg"><?php echo $err_pass;?></span>
						
						</td>
					</tr>
					<tr>
					<td colspan="2"><input class="my-font btn-mine" type="submit"  name="login" value="Login"></td>
						
					</tr>
					
				</table>
			</form>
			
		</div>
		
		
		<div class="footer"></div>	
	</body>
	
	  <script src="js/loginValidation_tr.js"></script>
</html>