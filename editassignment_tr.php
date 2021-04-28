<?php 
      require_once 'controllers/assignment controller_tr.php';
	  $no = $_GET["no"];
	 $assignment = getAssignment($no);
	  
	  session_start();
	
?>

<html>
    <head>
    </head>
         <body>

        <fieldset style ="width:500px">
            <legend><h1>Edit Assignment</h1></legend>
            
			<form action="" method="post">
                
				<table>
                     <tr>
                        <td><span>Department:</span></td>
						<td><input type="hidden" name="no" value ="<?php echo $assignment["no"];?>" ></td>
                        <td><input type="text" name="department" value="<?php echo $assignment ["department"];?>" >
                            <span><?php echo $err_department;?></span></td>
                    </tr>
					
					<tr>
					<td><span>Subject:</span></td>
					<td><input type="hidden" name="no" value = "<?php echo $assignment["no"];?>" ></td>
					<td><select name="subject" value="<?php echo $assignment ["subject"];?>">
							<option selected disabled>Chose One</option>
							<option>Math</option>
							<option>Physics</option>
							<option>Chemistry</option>
							
							
						</select>
					<span><?php echo $err_subject;?></span></td>
				</tr>
				
				
				<tr>
                        <td><span>Section:</span></td>
						<td><input type="hidden" name="no" value = "<?php echo $assignment["no"];?>" ></td>
                        <td><input type="radio" name="section" value="A">A
                            <input type="radio" name="section" value="B">B
							<span><?php echo $err_section;?></span></td>
                    </tr>
					
					
					
					
					<tr>
                        <td><span>Title:</span></td>
						<td><input type="hidden" name="no" value ="<?php echo $assignment["no"];?>" ></td>
                        <td><input type="text" name="title" value="<?php echo $assignment ["title"];?>" >
                            <span><?php echo $err_title;?></span></td>
                    </tr>
					
					<tr>
                        <td><span>Assignment Details:</span></td>
						<td><input type="hidden" name="no" value ="<?php echo $assignment["no"];?>" ></td>
                        <td><textarea name="tarea"><?php echo $assignment["description"];?></textarea>
                        <span><?php echo $err_description;?></span></td>
				
				    </tr>
				
				    <tr>
                        <td><span>Last Date of Submission:</span></td>
						<td><input type="hidden" name="no" value = "<?php echo $assignment["no"];?>" ></td>
				
				        
				        <td><select name="day" value="<?php echo $assignmet ["date"];?>">
				                    <option selected disabled>Day</option>
									<?php
									     for($i=1;$i<=31;$i++)
										 {
											 echo "<option>$i</option>";
										 }
										 
									?>
									
				            </select>
							
							
							<select name="month" value="<?php echo $assignment ["date"];?>">
				                    <option selected disabled>Month</option>
									
									<?php
									     $months = array("January","February","March","April","May","June","July","August","September","October","November","December");
										 for($i=0;$i<count($months);$i++)
										 {
											 echo"<option>$months[$i]</option>";
											 }
                                    ?>										 
				            </select>
							
							
							<select name="year" value="<?php echo $assignment ["date"];?>">
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
			
			          <input type="submit"  name="editassignment_tr" value="Edit Assignment" class="form-control">
		            </div>
					 
					    <br>
					         <div>
			                      <a href="view assignment_tr.php"  class="button">Back</a>
			                 </div>
            
			</form> 
			
    </fieldset> 
	
</body>

</html>