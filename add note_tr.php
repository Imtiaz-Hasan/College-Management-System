<?php
    
     require_once 'controllers/note controller_tr.php';
	 
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
            <legend><h1>Add Note</h1></legend>
            
			<form action="" onsubmit="return validate()" method="post">
			
			 <div class="form-group text-right">
			 
			        <button><a href="view note_tr.php"  class="button">View </a></button>
			     </div>
			
				 
				 <table>
				 
				 
				 <tr>
                        <td><span>Date</span></td>
				
				        
				        <td><select name="day" id="date">
				                    <option selected disabled>Day</option>
									<?php
									     for($i=1;$i<=31;$i++)
										 {
											 echo "<option>$i</option>";
										 }
										 
									?>
									
				            </select>
							
							
							<select name="month"id="date">
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
                           <br> <span><?php echo $err_section;?></span>
						   </td>
                    </tr>
				
				
				 
                    <tr>
                        <td><span>Topic:</span></td>
                        <td><input type="text" name="topic"  id="topic" value="<?php echo $topic;?>" placeholder ="Topic "><span  <?php echo $topic;?> id="err_topic"></span>
                          <br><span><?php echo $err_topic;?></span></td>
                    </tr>
					
					
				
                    <tr>
                        <td><span>Note:</span></td>
                        <td><input type="text" name="description"  id="description" value="<?php echo $description;?>" placeholder ="Type Note "><span <?php echo $description;?> id="err_description"></span>
                            <span><?php echo $err_description;?></span></td>
                    </tr>
					
					<br>
					
					<tr>
					<td><input type="submit" name="addnote" value="submit"></td>
				</tr>
				
					 </table>
                            
					    <br>
					         <div>
			                      <a href="confirm_tr.php"  class="button">Back</a>
			                 </div>
			</form> 
			
    </fieldset> 
	
</body>

         <script src="js/noteValidation_tr.js"></script>

</html>