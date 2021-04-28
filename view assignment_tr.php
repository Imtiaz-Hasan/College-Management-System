<?php

require_once 'controllers/assignment controller_tr.php';
	  $view = getViewAssignment();

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
      <fieldset style ="width:900px">
          <legend><h1> View Assignment </h1></legend>
		  
      <div id="">
	  <input type="text" id="search_text" onkeyup="suggest(this)" class="form-control" placeholder="Search by title.."><br>
	         <p id="suggestion">
			 </p>
	</div>	
	         <form action="" method="post">
			 
			 
	  
	           <table border= "1" style="border-collapse: collapse" align="center" >
				
					
			<thead>
			<th>Sl No</th>
			<th> Department</th>
			<th>Subject </th>
			<th> Section</th>
			<th> Title</th>
			<th> Assignment</th>
			<th> Date</th>
			<th></th>
			<th></th>
			
		</thead>
		<tbody>
			<?php
				foreach($view as $assignment){
					echo "<tr>";
					echo "<td>".$assignment["no"]."</td>";
					echo "<td>".$assignment["department"]."</td>";
					echo "<td>".$assignment["subject"]."</td>";
					echo "<td>".$assignment["section"]."</td>";
					echo "<td>".$assignment["title"]."</td>";
					echo "<td>".$assignment["description"]."</td>";
					echo "<td>".$assignment["date"]."</td>";
					
					
					echo '<td><a href="editassignment_tr.php?no='.$assignment["no"].'" >Edit</a></td>';
					echo '<td><a href="controllers/assignmentdeletecontroller_tr.php?no='.$assignment["no"].'" >Delete</a></td>';
					echo "</tr>";
				}
			?> 
								

                 
                 </table> 
				          <br>
					  <div>
			               <a href="add assignment_tr.php"  class="button">Back</a>
			           </div>
	            </form>
	          </fieldset>
      </body>
         <script src="js/assignmentsearch_tr.js"></script>
</html>