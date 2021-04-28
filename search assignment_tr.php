<?php 

session_start();
	if(!isset($_SESSION["user"])){
		header("Location: login_tr.php");
	}
?>

<html>
     <head>
     
     
</head>
       <body>
	   <legend><h1>  Search Assignment</h1></legend>
	         <fieldset style ="width:500px">
			     
              
   
<?php 
    
	$connection  =  new mysqli('localhost','root','','project');
  

  if(isset($_POST['search'])) 
  {
	  $searchKey=$_POST['search'];
	  $sql = "SELECT * FROM assignment WHERE subject LIKE '%$searchKey%'";
   } 
   else 
   { 
           $sql = "SELECT * FROM assignment";
           $searchKey = "";
   
   }
	   
     $result = mysqli_query($connection,$sql);
   
   ?>
   <form action="" method="POST"> 
     <div class="">
        <input type="text" name="search" class='form-control' placeholder="Search By Subject" value="<?php echo $searchKey; ?>" > 
     </div>
     <div class="form-group text-right">
        <button class="btn">Search</button>
     </div>
   </form>
   
   
      <table border= "1" style="border-collapse: collapse" align="center" >
   <thead>
     <tr>
        <th>Department</th>
       <th>Subject</th>
	   <th>Section</th>
	   <th>Title</th>
	   <th>Assignment</th>
     <tr>
	 </thead>
	 
	 <?php while($row = mysqli_fetch_object($result)) {?>
     
	 <tbody>
	 <tr>
       <td><?php echo $row->department?></td>
       <td><?php echo $row->subject?></td>
	   <td><?php echo $row->section?></td>
	   <td><?php echo $row->title?></td>
	   <td><?php echo $row->description?></td>
        </tr>
	   	   <?php }?>
        </table>
		
		

        
                 <div class="form-group text-right">
			        <button><a href="view assignment_tr.php"  class="button">Back</a></button>
			     </div>
      </fieldset> 				 
            
</body>
</html>