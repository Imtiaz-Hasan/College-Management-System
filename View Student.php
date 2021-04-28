<?php
     require_once 'controllers/StudentController.php';
	  $students = getAllStudents();
	  
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
          <legend><h1> View Student </h1></legend>
      <div id="">
	  <input type="text" id="search_text" onkeyup="suggest(this)" class="form-control" placeholder="Search.."><br>
	         <p id="suggestion">
			 </p>
	</div>
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
				foreach($students as $student){
					echo "<tr>";
					echo "<td>".$student["id"]."</td>";
					echo "<td>".$student["name"]."</td>";
					
					echo "<td>".$student["phone"]."</td>";
					echo "<td>".$student["date"]."</td>";
					echo "<td>".$student["gender"]."</td>";
					
					echo '<td><a href="EditStudent.php?id='.$student["id"].'" class="btn btn-success">Edit</a></td>';
					echo '<td><a href="controllers/DeleteStudentController.php?id='.$student["id"].'" class="btn btn-danger">Delete</a></td>';
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
	  <script src="js/StudentSearchValidation.js"></script>
</html>