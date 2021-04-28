<?php
     require_once 'controllers/TeacherController.php';
	  $teachers = getAllTeachers();
	  
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
          <legend><h1> View Teacher </h1></legend>
      
	         <form action="" method="post">
	  
	   <table border= "1" style="border-collapse: collapse" align="center" >
	   
  <tr>
    <th>ID</th>
	<th >Name</th>
    
	<th >Phone</th>
	<th >Date</th>
	<th >Gender</th>
	
	<th >Edit</th>
	<th>Remove</th>
	<th></th>
	<th></th>
  </tr>
  
  
      <tbody>
			<?php
				foreach($teachers as $teacher){
					echo "<tr>";
					echo "<td>".$teacher["id"]."</td>";
					echo "<td>".$teacher["name"]."</td>";
					
					echo "<td>".$teacher["phone"]."</td>";
					echo "<td>".$teacher["date"]."</td>";
					echo "<td>".$teacher["gender"]."</td>";
					
					echo '<td><a href="EditTeacher.php?id='.$teacher["id"].'" class="btn btn-success">Edit</a></td>';
					echo '<td><a href="controllers/DeleteTeacherController.php?id='.$teacher["id"].'" class="btn btn-danger">Delete</a></td>';
					echo "</tr>";
				}
			?>
		
			
		</tbody>
  
  
  
                 </table> 
				 <div class="form-group text-left">
			     <a href="admin_front.php"  class="btn btn-danger">Back</a>
			     </div>
				 
	            </form>
	          </div>
      </body>

</html>