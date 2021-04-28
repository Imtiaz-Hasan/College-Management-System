<?php 
      require_once 'controllers/pmeeting controller_tr.php';
	  $no = $_GET["no"];
	 $pmeeting = getPmeeting($no);
	  
	  session_start();
	
?>

<html>
    <head>
    </head>
         <body>

        <fieldset style ="width:500px">
            <legend><h1>Edit pmeeting</h1></legend>
            
			<form action="" method="post">
                
				<table>
				
				<tr>
                        <td><span>Date :</span></td>
						<td><input type="hidden" name="no" value = "<?php echo $pmeeting["no"];?>" ></td>
				
				        
				        <td><select name="day" value="<?php echo $pmeeting ["date"];?>">
				                    <option selected disabled>Day</option>
									<?php
									     for($i=1;$i<=31;$i++)
										 {
											 echo "<option>$i</option>";
										 }
										 
									?>
									
				            </select>
							
							
							<select name="month" value="<?php echo $pmeeting ["date"];?>">
				                    <option selected disabled>Month</option>
									
									<?php
									     $months = array("January","February","March","April","May","June","July","August","September","October","November","December");
										 for($i=0;$i<count($months);$i++)
										 {
											 echo"<option>$months[$i]</option>";
											 }
                                    ?>										 
				            </select>
							
							
							<select name="year" value="<?php echo $pmeeting ["date"];?>">
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
                        <td><span>Name:</span></td>
						<td><input type="hidden" name="no" value ="<?php echo $pmeeting["no"];?>" ></td>
                        <td><input type="text" name="name" value="<?php echo $pmeeting ["name"];?>" >
                            <span><?php echo $err_name;?></span></td>
                    </tr>
					
				
                    <tr>
                        <td><span>Department:</span></td>
						<td><input type="hidden" name="no" value ="<?php echo $pmeeting["no"];?>" ></td>
                        <td><input type="text" name="department" value="<?php echo $pmeeting ["department"];?>" >
                            <span><?php echo $err_department;?></span></td>
                    </tr>
					
					
				
					
					<tr>
                        <td><span>Section:</span></td>
						<td><input type="hidden" name="no" value ="<?php echo $pmeeting["no"];?>" ></td>
                        <td><input type="text" name="section" value="<?php echo $pmeeting ["section"];?>" >
                            <span><?php echo $err_section;?></span></td>
                    </tr>
				
					
					
					
					
					<tr>
                        <td><span>Topic:</span></td>
						<td><input type="hidden" name="no" value ="<?php echo $pmeeting["no"];?>" ></td>
                        <td><input type="text" name="topic" value="<?php echo $pmeeting ["topic"];?>" >
                            <span><?php echo $err_topic;?></span></td>
                    </tr>
					
					
				
				    
				
					 </table>
					 
					 <div class="form-group text-center">
			
			          <input type="submit"  name="editpmeeting" value="Edit pmeeting" class="form-control">
		            </div>
					 
					    <br>
					         <div>
			                      <a href="view pmeeting_tr.php"  class="button">Back</a>
			                 </div>
            
			</form> 
			
    </fieldset> 
	
</body>

</html>