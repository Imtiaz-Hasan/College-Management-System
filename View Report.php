<?php
     require_once 'controllers/ReportController.php';
	  $reports = getAllReports();
	  
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
          <legend><h1> View Report </h1></legend>
      
	         <form action="" method="post">
	  
	   <table border= "1" style="border-collapse: collapse" align="center" >
	   
  <tr>
    <th>ID</th>
	<th >Students Number</th>
    
	<th >Teachers Number</th>
	<th >Students Passed</th>
	<th >Students Failed</th>
	<th >Upload Date</th>
	
	<th >Edit</th>
	<th>Remove</th>
	<th></th>
	<th></th>
  </tr>
  
  
      <tbody>
			<?php
				foreach($reports as $report){
					echo "<tr>";
					echo "<td>".$report["id"]."</td>";
					echo "<td>".$report["snumber"]."</td>";
					echo "<td>".$report["tnumber"]."</td>";
					
					echo "<td>".$report["pass"]."</td>";
					echo "<td>".$report["fail"]."</td>";
					echo "<td>".$report["date"]."</td>";
					
					echo '<td><a href="EditReport.php?id='.$report["id"].'" class="btn btn-success">Edit</a></td>';
					echo '<td><a href="controllers/DeleteReportController.php?id='.$report["id"].'" class="btn btn-danger">Delete</a></td>';
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