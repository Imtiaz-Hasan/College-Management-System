<?php
     require_once 'controllers/NoticeController.php';
	  $notices = getAllNotices();
	  
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
          <legend><h1> View Notice </h1></legend>
      
	         <form action="" method="post">
	  
	   <table border= "1" style="border-collapse: collapse" align="center" >
	   
  <tr>
    <th>ID</th>
	<th >Name</th>
    
	
	<th >Date</th>
	<th >Description</th>
	
	<th >Edit</th>
	<th>Remove</th>
	<th></th>
	<th></th>
  </tr>
  
  
      <tbody>
			<?php
				foreach($notices as $notice){
					echo "<tr>";
					echo "<td>".$notice["id"]."</td>";
					echo "<td>".$notice["name"]."</td>";
					
					echo "<td>".$notice["date"]."</td>";
					echo "<td>".$notice["description"]."</td>";
					
					echo '<td><a href="EditNotice.php?id='.$notice["id"].'" class="btn btn-success">Edit</a></td>';
					echo '<td><a href="controllers/DeleteNoticeController.php?id='.$notice["id"].'" class="btn btn-danger">Delete</a></td>';
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