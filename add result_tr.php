<?php
    
	  require_once 'controllers/result controller_tr.php';
	  
    session_start();
	/*if(!isset($_SESSION["user"]))
	{
		header("Location: login_tr.php");
	}*/

		
?>

<html>
    <head>
    </head>
         <body>

        <fieldset style ="width:500px">
            <legend><h1>Add Result</h1></legend>
            
			
			 <form action="" onsubmit="return validate()" method="post">
			 
			 
			 
			   <div class="form-group text-right">
			        <button><a href="view result_tr.php"  class="button">View </a></button>
			     </div>
			 <br>
			 
			<table>
                   
				  <tr>
						<td><span >Department:</span></td>
						
						<td><input type="text" name="department" id="department" value="<?php echo $department;?>" placeholder ="Department Name"><span <?php echo $department;?> id="err_department"></span>
						    <br><span><?php echo $err_department;?></span>
							
						</td>
					</tr>
					
					
					
					<tr>
					<td><span>Subject:</span></td>
					<td><select name="subject" id="subject">
							<option selected disabled>Chose One</option>
							<option>Math</option>
							<option>Physics</option>
							<option>Chemistry</option>
							
						</select><span <?php echo $subject;?> id="err_subject"></span>
					<span id="err_subject"><?php echo $err_subject;?></span></td>
				</tr>
				
					
					
					 <tr>
                        <td><span>Section:</span></td>
                        <td><input type="text" name="section" id="section" value="<?php echo $section;?>" placeholder ="Section Name"><span <?php echo $section;?> id="err_section"></span>
                           <br> <span id="err_section"><?php echo $err_section;?></span>
						   </td>
                    </tr>
				
                        <td><span>Passed:</span></td>
                        <td><input type="text" name="passed" id="passed" value="<?php echo $passed;?>" placeholder ="Passed Students"><span <?php echo $passed;?> id="err_passed"></span>
                            <span><?php echo $err_passed;?></span></td>
                    </tr>
					
					<tr>
                        <td><span>Failed:</span></td>
                        <td><input type="text" name="failed" id="failed" value="<?php echo $failed;?>" placeholder ="Failed Students"><span <?php echo $failed;?> id="err_failed"></span>
                            <span><?php echo $err_failed;?></span></td>
                    </tr>
				
					
					 <tr>
                        <td><span> Publish Date</span></td>
				
				        
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
									for($i=1998;$i<=2021;$i++)
									{
										echo "<option>$i</option>";
									}
									?>
									
				            </select>
							<span id="err_date"><?php echo $err_date;?></span><br>
							</td>
					</tr>
				
				
				
				
					
					<td><input type="submit" name="addresult" value="submit"></td>
				</tr>
					 </table>
					 
                    <br>
					        <div>
			                    <a href="confirm_tr.php"  class="button">Back</a>
			                </div>
 
					  
                            
			</form> 
			
    </fieldset> 
	
</body>

        
	  <script src="js/resultValidation_tr.js"></script>

</html>