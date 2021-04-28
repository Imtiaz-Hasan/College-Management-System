<?php 
      require 'controllers/StudentController.php';
	 $id = $_GET["id"];
	 $student = getStudent($id);
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
            
			
            <form action="" method="post">
			<legend><h1>  Edit Student</h1></legend>
                <table>
                    <tr>
                        <td><span>Name:</span></td>
						<td><input type="hidden" name="id" value = "<?php echo $student["id"];?>" ></td>
                        <td><input type="text" name="name" value="<?php echo $student ["name"];?>"  placeholder ="Student Name">
						<span><?php echo $err_name;?></span></td>
                    </tr>
					
					
                    <tr>
                        <td><span>Username:</span></td>
						<td><input type="hidden" name="id" value = "<?php echo $student["id"];?>" ></td>
                        <td><input type="text" name="uname" value="<?php echo $student["username"];?>">
						<span><?php echo $err_uname;?></span></td>
                    </tr>
					
					
                    <tr>
                        <td><span>Password:</span></td>
						<td><input type="hidden" name="id" value = "<?php echo $student["id"];?>"></td>
                        <td><input type="password" name="pass" value="<?php echo $student ["password"];?>">
						
                        <span><?php echo $err_pass;?></span>
                        <span><?php echo $err_lpass;?></span>
                        <span><?php echo $err_upass;?></span>
                        <span><?php echo $err_spass;?></span>
                        <span><?php echo $err_npass;?></span></td>
                    </tr>
                    </tr>
					
					
                    <tr>
                        <td><span>Confirm Password:</span></td>
						<td><input type="hidden" name="id" value = "<?php echo $student["id"];?>" ></td>
                        <td><input type="password" name="cpass" value="<?php echo $student ["confirmpassword"];?>">
						<span><?php echo $err_cpass;?></span></td>
                    </tr>
					
					<tr>
					<td><span>Department</span></td>
					<td><input type="hidden" name="id" value = "<?php echo $student["id"];?>" ></td>
					<td>
						<select  name="deprt" value="<?php echo $student ["deprt"];?>">
							<option disabled selected>Chose One</option>
							<option>Science</option>
							<option>Commerce</option>
							<option>Arts</option>
						</select>
						<span><?php echo $err_deprt;?></span>
					</td>
				    </tr>
					
					
                    <tr>
                        <td><span>Email:</span></td>
						<td><input type="hidden" name="id" value = "<?php echo $student["id"];?>" ></td>
                        <td><input type="text" name="mail" value="<?php echo $student ["email"];?>">
						<span><?php echo $err_mail;?></span></td>
                    </tr>
					
					
                    <tr>
                        <td><span>Phone:</span></td>
						<td><input type="hidden" name="id" value = "<?php echo $student["id"];?>" ></td>
                        <td><input type="text" name="phone" value="<?php echo $student ["phone"];?>">
						<span><?php echo $err_phone;?></span></td>
                    </tr>

                    
					
					
                    <tr>
                        <td><span>Birth Date</span></td>
						<td><input type="hidden" name="id" value = "<?php echo $student["id"];?>" ></td>
				
				        
				        <td><select name="day" value="<?php echo $student ["date"];?>" >
				                    <option selected disabled>Day</option>
									<?php
									     for($i=1;$i<=31;$i++)
										 {
											 echo "<option>$i</option>";
										 }
										 
									?>
									
				            </select>
							
							
							<select name="month" value="<?php echo $student ["date"];?>">
				                    <option selected disabled>Month</option>
									
									<?php
									     $months = array("January","February","March","April","May","June","July","August","September","October","November","December");
										 for($i=0;$i<count($months);$i++)
										 {
											 echo"<option>$months[$i]</option>";
											 }
                                    ?>										 
				            </select>
							
							
							<select name="year" value="<?php echo $student ["date"];?>">
				                    <option selected disabled>Year</option>
									<?php
									for($i=1998;$i<=2021;$i++)
									{
										echo "<option>$i</option>";
									}
									?>
									
				            </select>
							<?php echo $err_date;?><br>
							</td>
					</tr>
					
                
                    <tr>
                        <td><span>Gender:</span></td>
						<td><input type="hidden" name="id" value = "<?php echo $student["id"];?>" ></td>
                        <td><input type="radio" name="gender" value="male">Male
                            <input type="radio" name="gender" value="female">Female
							<span><?php echo $err_gender;?></span></td>
                    </tr>
					
					
                        
					<div class="form-group text-center">
			
			          <input type="submit" class="btn btn-success" name="editstudent" value="Edit Student" class="form-control">
		            </div>

                     
              </table>
			  <div class="form-group text-right">
			<a href="View Student.php"  class="btn btn-danger">Back</a>
			</div>


         </form> 
    </div>   
  </body>
</html>