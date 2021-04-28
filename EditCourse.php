<?php 
      require 'controllers/CourseController.php';
	 $id = $_GET["id"];
	 $course = getCourse($id);
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
			<legend><h1>  Edit Course</h1></legend>
                <table>
                    <tr>
                        <td><span>title:</span></td>
						<td><input type="hidden" name="id" value = "<?php echo $course["id"];?>" ></td>
                        <td><input type="text" name="name" value="<?php echo $course ["name"];?>">
						<span><?php echo $err_name;?></span></td>
                    </tr>
					
				
					
                    <tr>
                        <td><span>Birth Date</span></td>
						<td><input type="hidden" name="id" value = "<?php echo $course["id"];?>" ></td>
				
				        
				        <td><select name="day" value="<?php echo $course ["date"];?>" >
				                    <option selected disabled>Day</option>
									<?php
									     for($i=1;$i<=31;$i++)
										 {
											 echo "<option>$i</option>";
										 }
										 
									?>
									
				            </select>
							
							
							<select name="month" value="<?php echo $course ["date"];?>">
				                    <option selected disabled>Month</option>
									
									<?php
									     $months = array("January","February","March","April","May","June","July","August","September","October","November","December");
										 for($i=0;$i<count($months);$i++)
										 {
											 echo"<option>$months[$i]</option>";
											 }
                                    ?>										 
				            </select>
							
							
							<select name="year" value="<?php echo $course ["date"];?>">
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
					
                
				
				    </tr>
					
					
                        
					<div class="form-group text-center">
			
			          <input type="submit" class="btn btn-success" name="editcourse" value="Edit Course" class="form-control">
		            </div>

                     
              </table>
			  <div class="form-group text-right">
			<a href="View Course.php"  class="btn btn-danger">Back</a>
			</div>


         </form> 
    </div>   
  </body>
</html>