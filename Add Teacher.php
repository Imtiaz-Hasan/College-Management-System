<?php 
      require_once 'controllers/TeacherController.php';
	 
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
            <legend><h1>  Add Teacher</h1></legend>
			
            <form action="" onsubmit="return validate()" method="post">
                <table>
                    <tr>
                        <td><span>Name:</span></td>
                        <td><input type="text" name="name" id="name" value="<?php echo $name;?>" placeholder ="User Name"><span <?php echo $name;?> id="err_name"></span>
                            <span><?php echo $err_name;?></span></td>
                    </tr>
					
					
					
					
                    <div class="form-group">
                    <tr>
                        <td><span>Username:</span></td>
                        <td><input type="text" name="uname" id="uname" onfocusout="checkUsername(this)" value="<?php echo $uname;?>" placeholder ="User Name" ><span <?php echo $uname;?> id="err_uname"></span>
                            <span id="err_uname"><?php echo $err_uname;?></span></td>
                    </tr>
					</div>
					
					
					
                    <tr>
                        <td><span>Password:</span></td>
                        <td><input type="password" name="pass" id="pass" value="<?php echo $pass;?>" placeholder ="Password"><span <?php echo $pass;?> id="err_pass"></span>
                        <span><?php echo $err_pass;?></span>
                        <span><?php echo $err_lpass;?></span>
                        <span><?php echo $err_upass;?></span>
                        <span><?php echo $err_spass;?></span>
                        <span><?php echo $err_npass;?></span></td>
                    </tr>
					
					
                    <tr>
                        <td><span>Confirm Password:</span></td>
                        <td><input type="password" name="cpass" id="cpass" value="<?php echo $cpass;?>" placeholder ="Confirm Password"><span <?php echo $cpass;?> id="err_cpass"></span>
                        <span><?php echo $err_cpass;?></span></td>
                    </tr>
					
					<tr>
					<td><span>Department</span></td>
					<td>
						<select  name="deprt" id="deprt">
							<option disabled selected>Chose One</option>
							<option>Science</option>
							<option>Commerce</option>
							<option>Arts</option>
						</select><span <?php echo $deprt;?> id="err_deprt"></span>
						<span><?php echo $err_deprt;?></span>
					</td>
				    </tr>
					
					
                    <tr>
                        <td><span>Email:</span></td>
                        <td><input type="text" name="mail" id="mail" value="<?php echo $mail;?>" placeholder ="E-mail"><span <?php echo $mail;?> id="err_mail"></span>
                        <span><?php echo $err_mail;?></span></td>
                    </tr>
					
					
                    <tr>
                        <td><span>Phone:</span></td>
                        <td><input type="text" name="phone" id="phone" value="<?php echo $phone;?>" placeholder ="Phone Number"><span <?php echo $phone;?> id="err_phone"></span>
                        <span><?php echo $err_phone;?></span></td>
                    </tr>

                    
					
					
                    <tr>
                        <td><span>Birth Date</span></td>
				
				        
				        <td><select name="day" id="date">
				                    <option selected disabled>Day</option>
									<?php
									     for($i=1;$i<=31;$i++)
										 {
											 echo "<option>$i</option>";
										 }
										 
									?>
									
				            </select>
							
							
							<select name="month" id="date">
				                    <option selected disabled>Month</option>
									
									<?php
									     $months = array("January","February","March","April","May","June","July","August","September","October","November","December");
										 for($i=0;$i<count($months);$i++)
										 {
											 echo"<option>$months[$i]</option>";
											 }
                                    ?>										 
				            </select>
							
							
							<select name="year" id="date">
				                    <option selected disabled>Year</option>
									<?php
									for($i=1996;$i<=2021;$i++)
									{
										echo "<option>$i</option>";
									}
									?>
									
				            </select>
							<span id="err_date"><?php echo $err_date;?></span><br>
							</td>
					</tr>
					
                
                    <tr>
                        <td><span>Gender:</span></td>
                        <td><input type="radio" name="gender" id="male" value="male"><span>Male</span>
                            <input type="radio" name="gender" id="female" value="female"><span>Female</span>
                            <span id="err_gender"><?php echo $err_gender;?></span></td>
                    </tr>
					
					
       </table> 
					<div class="form-group text-right">	
                        <input type="submit" name="addteacher" class="btn btn-primary" value="submit" >
                        
					</div>

                     
              
			  <div class="form-group text-left">
			<a href="admin_front.php"  class="btn btn-danger">Back</a>
			</div>


         </form> 
    </div>   
  </body>
  <script src="js/AddTeacherValidation.js"></script>
</html>