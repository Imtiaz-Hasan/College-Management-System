<?php 
      require_once 'controllers/NoticeController.php';
	 
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
            <legend><h1>  Add Notice</h1></legend>
			
            <form action="" onsubmit="return validate()" method="post" >
                <table>
                    <tr>
                        <td><span>Title:</span></td>
                        <td><input type="text" name="name" id="name" placeholder ="Notice Title"><span <?php echo $name;?> id="err_name"></span>
                            <span><?php echo $err_name;?></span></td>
                    </tr>
					
					
                    

                    
					
					
                    <tr>
                        <td><span>Notice Date: </span></td>
				
				        
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
                        <td><span>Description:</span></td>
                        <td><textarea name="tarea" id="description"></textarea>
                        <span id="err_description"><?php echo $err_description;?></span></td>
				
				    </tr>
					
					
					
					
					</table>
                        
					<div class="form-group text-right">
                        <input type="submit" name="addnotice" class="btn btn-primary" value="submit" >
                        
					</div>

                     
              
			  <div class="form-group text-left">
			<a href="admin_front.php"  class="btn btn-danger">Back</a>
			</div>


         </form> 
    </div>   
  </body>
  <script src="js/AddNoticeValidation.js"></script>
</html>