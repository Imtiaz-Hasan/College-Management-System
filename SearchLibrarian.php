<?php include 'main_header.php';

session_start();
	if(!isset($_SESSION["user"])){
		header("Location: login.php");
	}
?>

<html>
<head>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
     
     
</head>
<body>
<div class="center-search">
    <legend><h1>  Search Librarian User</h1></legend>
   <div class="row">
   <div class="col-md-8 col-md-offset-2" style="margin-top: 5%;">
   <div class="row">
   <?php $connection  =  new mysqli('localhost','root','','project_database');
   if(isset($_POST['search'])) {
	  $searchKey=$_POST['search'];
	  $sql = "SELECT * FROM librarian WHERE name LIKE '%$searchKey%'";
   } else { 
           $sql = "SELECT * FROM librarian";
           $searchKey = "";
   
   }
	   
     $result = mysqli_query($connection,$sql);
   
   ?>
   <form action="" method="POST"> 
     <div class="col-md-6">
        <input type="text" name="search" class='form-control' placeholder="Search By Name" value="<?php echo $searchKey; ?>" > 
     </div>
     <div class="col-md-6 text-left">
        <button class="btn">Search</button>
     </div>
   </form>
   <br>
   <br>
   </div>

   <table class="table table-bordered">
     <tr>
        <th>Name</th>
        <th>Username</th>
       <th>Email</th>
	   <th>Password</th>
	   <th>Phone</th>
	   <th>Gender</th>
     <tr>
	 <?php while($row = mysqli_fetch_object($result)) {?>
     <tr>
       <td><?php echo $row->name ?></td>
       <td><?php echo $row->username ?></td>
       <td><?php echo $row->email ?></td>
	   <td><?php echo $row->password ?></td>
	   <td><?php echo $row->phone ?></td>
	   <td><?php echo $row->gender ?></td>
        </tr>
	    <?php }?>
        </table>

        </div>
      </div>
     </div>
           <div class="form-group text-right">
			<a href="Search.php"  class="btn btn-danger">Back</a>
			</div>
</body>
</html>