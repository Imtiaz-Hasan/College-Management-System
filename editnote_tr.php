<?php 
      require_once 'controllers/note controller_tr.php';
	  $no = $_GET["no"];
	 $note = getNote($no);
	  
	  session_start();
	
?>

<html>
    <head>
    </head>
         <body>

        <fieldset style ="width:500px">
            <legend><h1>Edit Note</h1></legend>
            
			<form action="" method="post">
                
				<table>
				
				<tr>
                        <td><span>Date :</span></td>
						<td><input type="hidden" name="no" value = "<?php echo $note["no"];?>" ></td>
				
				        
				        <td><select name="day" value="<?php echo $note ["date"];?>">
				                    <option selected disabled>Day</option>
									<?php
									     for($i=1;$i<=31;$i++)
										 {
											 echo "<option>$i</option>";
										 }
										 
									?>
									
				            </select>
							
							
							<select name="month" value="<?php echo $note ["date"];?>">
				                    <option selected disabled>Month</option>
									
									<?php
									     $months = array("January","February","March","April","May","June","July","August","September","October","November","December");
										 for($i=0;$i<count($months);$i++)
										 {
											 echo"<option>$months[$i]</option>";
											 }
                                    ?>										 
				            </select>
							
							
							<select name="year" value="<?php echo $note ["date"];?>">
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
                        <td><span>Department:</span></td>
						<td><input type="hidden" name="no" value ="<?php echo $note["no"];?>" ></td>
                        <td><input type="text" name="department" value="<?php echo $note ["department"];?>" >
                            <span><?php echo $err_department;?></span></td>
                    </tr>
					
					<tr>
					<td><span>Subject:</span></td>
					<td><input type="hidden" name="no" value = "<?php echo $note["no"];?>" ></td>
					<td><select name="subject" value="<?php echo $note ["subject"];?>">
							<option selected disabled>Chose One</option>
							<option>Math</option>
							<option>Physics</option>
							<option>Chemistry</option>
							
							
						</select>
					<span><?php echo $err_subject;?></span></td>
				</tr>
				
					
					<tr>
                        <td><span>Section:</span></td>
						<td><input type="hidden" name="no" value ="<?php echo $note["no"];?>" ></td>
                        <td><input type="text" name="section" value="<?php echo $note ["section"];?>" >
                            <span><?php echo $err_section;?></span></td>
                    </tr>
				
					
					
					
					
					<tr>
                        <td><span>Topic:</span></td>
						<td><input type="hidden" name="no" value ="<?php echo $note["no"];?>" ></td>
                        <td><input type="text" name="topic" value="<?php echo $note ["topic"];?>" >
                            <span><?php echo $err_topic;?></span></td>
                    </tr>
					
					<tr>
                        <td><span>Note:</span></td>
						<td><input type="hidden" name="no" value ="<?php echo $note["no"];?>" ></td>
                        <td><input type="text" name="description" value="<?php echo $note ["description"];?>" >
                            <span><?php echo $err_description;?></span></td>
                    </tr>
				
				    
				
					 </table>
					 
					 <div class="form-group text-center">
			
			          <input type="submit"  name="editnote" value="Edit note" class="form-control">
		            </div>
					 
					    <br>
					         <div>
			                      <a href="view note_tr.php"  class="button">Back</a>
			                 </div>
            
			</form> 
			
    </fieldset> 
	
</body>

</html>