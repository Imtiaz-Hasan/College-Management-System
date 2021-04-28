<?php include 'main_header.php';
	  require_once 'controllers/LoginController.php';
?>

<div class="center-login">
	<h1 class="text text-center">Sign Up</h1>
	<form action="" onsubmit="return validate()" method="post" class="form-horizontal form-material">
		<div class="form-group">
			<h4 class="text">Name</h4> 
			<input type="text" name="name" id="name" value="<?php echo $name;?>" class="form-control"><span <?php echo $name;?> id="err_name"></span>
			<span id="err_name"><?php echo $err_name;?></span>
		</div>
		<div class="form-group">
			<h4 class="text">Username</h4> 
			<input type="text" name="username" id="username" onfocusout="checkUsername(this)" value="<?php echo $username;?>" class="form-control"><span <?php echo $username;?> id="err_uname"></span>
			<span id="err_uname"><?php echo $err_uname;?></span>
		</div>
		<div class="form-group">
			<h4 class="text">Email</h4> 
			<input type="text" name="email" id="email" value="<?php echo $email;?>" class="form-control"><span <?php echo $email;?> id="err_mail"></span>
			<span id="err_mail"><?php echo $err_mail;?></span>
		</div>
		<div class="form-group">
			<h4 class="text">Password</h4> 
			<input type="password" name="password" id="password" value="<?php echo $password;?>" class="form-control"><span <?php echo $password;?> id="err_pass"></span>
			<span id="err_pass"><?php echo $err_pass;?></span>
		</div>
		
		<div class="form-group">
		    <h4 class="text">Address</h4>
			<input type="text" name="address" id="address" value="<?php echo $address;?>" class="form-control"><span <?php echo $address;?> id="err_address"></span>
			<span id="err_address"><?php echo $err_address;?></span>
             
		</div>
		<div class="form-group">
		    <h4 class="text">Gender</h4>
			<input type="text" name="gender" id="gender" value="<?php echo $gender;?>" class="form-control"><span <?php echo $gender;?> id="err_gender"></span>
			<span id="err_gender"><?php echo $err_gender;?></span>
             
		</div>
		
		
		<div class="form-group text-center">
			
			<input type="submit" class="btn btn-success" name="sign_up" value="Sign Up" class="form-control">
		</div>
		</form>
</div>


<script src="js/SignupValidation.js"></script>


<?php include 'main_footer.php';?>