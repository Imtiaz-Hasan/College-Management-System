<?php

    require_once 'controllers/attendence controller_tr.php';
	  $view = getViewAttendence();

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
	
	<fieldset style ="width:700px">
      
          <legend><h1> View Attendence </h1> </legend>
      
	         <form action="" method="post">
	  
	   <table border= "1" style="border-collapse: collapse" align="center" >
	   
  	<thead>
			<th>Sl No</th>
			<th> Department</th>
			<th>Subject </th>
			<th> Section</th>
			<th> Present Students</th>
			<th> Absent Students</th>
			<th> Date</th>
			
			<th></th>
			<th></th>
			
		</thead>
		<tbody>
			<?php
				foreach($view as $attendence){
					echo "<tr>";
					echo "<td>".$attendence["no"]."</td>";
					echo "<td>".$attendence["department"]."</td>";
					echo "<td>".$attendence["subject"]."</td>";
					echo "<td>".$attendence["section"]."</td>";
					echo "<td>".$attendence["present"]."</td>";
					echo "<td>".$attendence["absent"]."</td>";
					echo "<td>".$attendence["date"]."</td>";
					
					
					
					echo '<td><a href="editattendence_tr.php?no='.$attendence["no"].'" >Edit</a></td>';
					echo '<td><a href="controllers/attendencedeletecontroller_tr.php?no='.$attendence["no"].'" >Delete</a></td>';
					echo "</tr>";
				}
			?> 
							
  
  
                 </table> 
				  <br>
					  <div>
			               <a href="add attendence_tr.php"  class="button">Back</a>
			           </div>
						
	            </form>
	          </fieldset>
      </body>

</html>