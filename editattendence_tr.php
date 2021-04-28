<?php 
      require_once 'controllers/attendence controller_tr.php';
	  $no = $_GET["no"];
	 $attendence = getAttendence($no);
	  
	  session_start();
	
?>

<html>
    <head>
    </head>
         <body>

        <fieldset style ="width:500px">
            <legend><h1>Edit Attendence</h1></legend>
            
			<form action="" method="post">
                
				<table>
                    <tr>
                        <td><span>Department:</span></td>
						<td><input type="hidden" name="no" value ="<?php echo $attendence["no"];?>" ></td>
                        <td><input type="text" name="department" value="<?php echo $attendence ["department"];?>" >
                            <span><?php echo $err_department;?></span></td>
                    </tr>
					
					<tr>
					<td><span>Subject:</span></td>
					<td><input type="hidden" name="no" value = "<?php echo $attendence["no"];?>" ></td>
					<td><select name="subject" value="<?php echo $attendence ["subject"];?>">
							<option selected disabled>Chose One</option>
							<option>Math</option>
							<option>Physics</option>
							<option>Chemistry</option>
							
							
						</select>
					<span><?php echo $err_subject;?></span></td>
				</tr>
				
					
					<tr>
                        <td><span>Section:</span></td>
						<td><input type="hidden" name="no" value ="<?php echo $attendence["no"];?>" ></td>
                        <td><input type="text" name="section" value="<?php echo $attendence ["section"];?>" >
                            <span><?php echo $err_section;?></span></td>
                    </tr>
					
					
					<tr>
                        <td><span>Present Students:</span></td>
						<td><input type="hidden" name="no" value ="<?php echo $attendence["no"];?>" ></td>
                        <td><input type="text" name="present" value="<?php echo $attendence ["present"];?>" >
                            <span><?php echo $err_present;?></span></td>
                    </tr>
					
					
					<tr>
                        <td><span>Absent Students:</span></td>
						<td><input type="hidden" name="no" value ="<?php echo $attendence["no"];?>" ></td>
                        <td><input type="text" name="absent" value="<?php echo $attendence ["absent"];?>" >
                            <span><?php echo $err_absent;?></span></td>
                    </tr>
					
					
					
					<tr>
                        <td><span>Upload Date:</span></td>
						<td><input type="hidden" name="no" value = "<?php echo $attendence["no"];?>" ></td>
				
				        
				        <td><select name="day" value="<?php echo $attendence ["date"];?>">
				                    <option selected disabled>Day</option>
									<?php
									     for($i=1;$i<=31;$i++)
										 {
											 echo "<option>$i</option>";
										 }
										 
									?>
									
				            </select>
							
							
							<select name="month" value="<?php echo $attendence ["date"];?>">
				                    <option selected disabled>Month</option>
									
									<?php
									     $months = array("January","February","March","April","May","June","July","August","September","October","November","December");
										 for($i=0;$i<count($months);$i++)
										 {
											 echo"<option>$months[$i]</option>";
											 }
                                    ?>										 
				            </select>
							
							
							<select name="year" value="<?php echo $attendence ["date"];?>">
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
				
				
				    
				
				
				
				
					 </table>
					 <div class="form-group text-center">
			
			          <input type="submit"  name="editattendence" value="Edit Attendence" class="form-control">
		            </div>
					    <br>
					         <div>
			                      <a href="view attendence_tr.php"  class="button">Back</a>
			                 </div>
            
			</form> 
			
    </fieldset> 
	
</body>

</html>