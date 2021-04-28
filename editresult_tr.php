<?php 
      require_once 'controllers/result controller_tr.php';
	  
	  $no = $_GET["no"];
	  
	 $result = getResult($no);
	  
	  session_start();
	
?>

<html>
    <head>
    </head>
         <body>

        <fieldset style ="width:500px">
            <legend><h1>Edit Result</h1></legend>
            
			<form action="" method="post">
                
				<table>
                    <tr>
                        <td><span>Department:</span></td>
						<td><input type="hidden" name="no" value ="<?php echo $result["no"];?>" ></td>
                        <td><input type="text" name="department" value="<?php echo $result ["department"];?>" >
                            <span><?php echo $err_department;?></span></td>
                    </tr>
					
					<tr>
					<td><span>Subject:</span></td>
					<td><input type="hidden" name="no" value = "<?php echo $result["no"];?>" ></td>
					<td><select name="subject" value="<?php echo $result ["subject"];?>">
							<option selected disabled>Chose One</option>
							<option>Math</option>
							<option>Physics</option>
							<option>Chemistry</option>
							
						</select>
					<span><?php echo $err_subject;?></span></td>
				</tr>
				
					
					<tr>
                        <td><span>Section:</span></td>
						<td><input type="hidden" name="no" value ="<?php echo $result["no"];?>" ></td>
                        <td><input type="text" name="section" value="<?php echo $result ["section"];?>" >
                            <span><?php echo $err_section;?></span></td>
                    </tr>
					
					
					<tr>
                        <td><span>Passed:</span></td>
						<td><input type="hidden" name="no" value ="<?php echo $result["no"];?>" ></td>
                        <td><input type="text" name="passed" value="<?php echo $result ["passed"];?>" >
                            <span><?php echo $err_passed;?></span></td>
                    </tr>
					
					
					<tr>
                        <td><span>Failed:</span></td>
						<td><input type="hidden" name="no" value ="<?php echo $result["no"];?>" ></td>
                        <td><input type="text" name="failed" value="<?php echo $result ["failed"];?>" >
                            <span><?php echo $err_failed;?></span></td>
                    </tr>
					
					
					
					<tr>
                        <td><span>Upload Date:</span></td>
						<td><input type="hidden" name="no" value = "<?php echo $result["no"];?>" ></td>
				
				        
				        <td><select name="day" value="<?php echo $result ["date"];?>">
				                    <option selected disabled>Day</option>
									<?php
									     for($i=1;$i<=31;$i++)
										 {
											 echo "<option>$i</option>";
										 }
										 
									?>
									
				            </select>
							
							
							<select name="month" value="<?php echo $result ["date"];?>">
				                    <option selected disabled>Month</option>
									
									<?php
									     $months = array("January","February","March","April","May","June","July","August","September","October","November","December");
										 for($i=0;$i<count($months);$i++)
										 {
											 echo"<option>$months[$i]</option>";
											 }
                                    ?>										 
				            </select>
							
							
							<select name="year" value="<?php echo $result ["date"];?>">
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
			
			          <input type="submit"  name="editresult" value="Edit Result" class="form-control">
		            </div>
					    <br>
					         <div>
			                      <a href="view result_tr.php"  class="button">Back</a>
			                 </div>
            
			</form> 
			
    </fieldset> 
	
</body>

</html>