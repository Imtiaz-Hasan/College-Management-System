<?php
    require_once 'controllers/LoginController.php';
  
	  $profiles = getMyProfiles();

    session_start();
	if(!isset($_SESSION["user"]))
	{
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
          <legend><h1> View Profile </h1> </legend>
             <img src="resources/gg.JPG" alt="Profile picture" width="128" height="128">
	         <form action="" method="post">
	  
	   <table border= "1" style="border-collapse: collapse" align="center" >
	   
  	<thead>
			<th>ID</th>
			<th> Name</th>
			<th>Username </th>
			<th> Email</th>
			<th> Password</th>
			<th>Address</th>
			<th> Gender</th>
			
			<th></th>
			<th></th>
			
		</thead>
		<tbody>
			<?php
				foreach($profiles as $users){
					echo "<tr>";
					echo "<td>".$users["id"]."</td>";
					echo "<td>".$users["name"]."</td>";
					echo "<td>".$users["username"]."</td>";
					echo "<td>".$users["email"]."</td>";
					echo "<td>".$users["password"]."</td>";
					echo "<td>".$users["address"]."</td>";
					echo "<td>".$users["gender"]."</td>";
					
					
					
					echo '<td><a href="controllers/DeleteAdminController.php?id='.$users["id"].'" >Delete</a></td>';
					echo "</tr>";
				}
			?> 
							
  
  
                 </table> 
				  <br>
				   <div class="form-group text-right">
					  <a href="admin_front.php" align="right" name="back" class="btn btn-danger">Back</a>
					</div>
	            </form>
	         
			  </div>
      </body>

</html>