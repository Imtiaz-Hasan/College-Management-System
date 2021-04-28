<?php 
      require 'controllers/ReportController.php';
	 $id = $_GET["id"];
	 $report = getReport($id);
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
                        <td><span>Students Number:</span></td>
						<td><input type="hidden" name="id" value = "<?php echo $report["id"];?>" ></td>
                        <td><input type="text" name="snumber" value="<?php echo $report ["snumber"];?>">
						<span><?php echo $err_snumber;?></span></td>
                    </tr>
					
					
                    <tr>
                        <td><span>Teachers Number:</span></td>
						<td><input type="hidden" name="id" value = "<?php echo $report["id"];?>" ></td>
                        <td><input type="text" name="tnumber" value="<?php echo $report["tnumber"];?>">
						<span><?php echo $err_tnumber;?></span></td>
                    </tr>
					
					<tr>
                        <td><span>Students Passed:</span></td>
						<td><input type="hidden" name="id" value = "<?php echo $report["id"];?>" ></td>
                        <td><input type="text" name="pass" value="<?php echo $report["pass"];?>">
						<span><?php echo $err_pass;?></span></td>
                    </tr>
					
					<tr>
                        <td><span>Students Failed:</span></td>
						<td><input type="hidden" name="id" value = "<?php echo $report["id"];?>" ></td>
                        <td><input type="text" name="fail" value="<?php echo $report["fail"];?>">
						<span><?php echo $err_fail;?></span></td>
                    </tr>
                    
					
					<tr>
					<td><span>Department</span></td>
					<td><input type="hidden" name="id" value = "<?php echo $report["id"];?>" ></td>
					<td>
						<select  name="deprt" value="<?php echo $report ["department"];?>">
							<option disabled selected>Chose One</option>
							<option>Science</option>
							<option>Commerce</option>
							<option>Arts</option>
						</select>
						<span><?php echo $err_deprt;?></span>
					</td>
				    </tr>
					
			
					
                    <tr>
                        <td><span>Birth Date</span></td>
						<td><input type="hidden" name="id" value = "<?php echo $report["id"];?>" ></td>
				
				        
				        <td><select name="day" value="<?php echo $report ["date"];?>" >
				                    <option selected disabled>Day</option>
									<?php
									     for($i=1;$i<=31;$i++)
										 {
											 echo "<option>$i</option>";
										 }
										 
									?>
									
				            </select>
							
							
							<select name="month" value="<?php echo $report ["date"];?>">
				                    <option selected disabled>Month</option>
									
									<?php
									     $months = array("January","February","March","April","May","June","July","August","September","October","November","December");
										 for($i=0;$i<count($months);$i++)
										 {
											 echo"<option>$months[$i]</option>";
											 }
                                    ?>										 
				            </select>
							
							
							<select name="year" value="<?php echo $report ["date"];?>">
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
					
                        
					<div class="form-group text-center">
			
			          <input type="submit" class="btn btn-success" name="editreport" value="Edit Report" class="form-control">
		            </div>

                     
              </table>
			  <div class="form-group text-right">
			<a href="View Report.php"  class="btn btn-danger">Back</a>
			</div>


         </form> 
    </div>   
  </body>
</html>