<?php 
      require_once 'controllers/ReportController.php';
	 
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
            <legend><h1>  Yearly Report</h1></legend>
			
            <form action="" onsubmit="return validate()" method="post">
                <table>
                    <tr>
                        <td><span>Students Number: </span></td>
                        <td><input type="text" name="snumber" id="snumber" placeholder ="Students Number"><span <?php echo $snumber;?> id="err_snumber"></span>
                            <span><?php echo $err_snumber;?></span></td>
                    </tr>
					
					<tr>
                        <td><span>Teachers Number: </span></td>
                        <td><input type="text" name="tnumber" id="tnumber" placeholder ="Students Number"><span <?php echo $tnumber;?> id="err_tnumber"></span>
                            <span><?php echo $err_tnumber;?></span></td>
                    </tr>
					
					
                    <tr>
                        <td><span>Students Passed</span></td>
                        <td><input type="text" name="pass" id="pass" placeholder ="Passed"><span <?php echo $pass;?> id="err_pass"></span>
                            <span><?php echo $err_pass;?></span></td>
                    </tr>
					
					<tr>
                        <td><span>Students Failed</span></td>
                        <td><input type="text" name="fail" id="fail" placeholder ="Failed"><span <?php echo $fail;?> id="err_fail"></span>
                            <span><?php echo $err_fail;?></span></td>
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
                        <td><span>Upload Date</span></td>
				
				        
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
					
                
					</table>
                        
					<div class="form-group text-right">	
                        <input type="submit" name="addreport" class="btn btn-primary" value="submit" >
                        
					</div>

                     
              
			  <div class="form-group text-left">
			<a href="admin_front.php"  class="btn btn-danger">Back</a>
			</div>


         </form> 
    </div>   
  </body>
  <script src="js/AddReportValidation.js"></script>
</html>