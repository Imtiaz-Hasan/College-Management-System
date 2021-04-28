<?php

require_once 'controllers/note controller_tr.php';
	  $view = getViewNote();

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
          <legend><h1> View Note </h1></legend>
      
	         <form action="" method="post">
	  
	            
	           <table border= "1" style="border-collapse: collapse" align="center" >
				
					
			<thead>
			<th>Sl#</th>
			<th> Date</th>
			<th> Department</th>
			<th>Subject </th>
			<th> Section</th>
			<th> Topic</th>
			<th> Description</th>
			
			<th></th>
			<th></th>
			
		</thead>
		<tbody>
			<?php
				foreach($view as $note){
					echo "<tr>";
					echo "<td>".$note["no"]."</td>";
					echo "<td>".$note["date"]."</td>";
					echo "<td>".$note["department"]."</td>";
					echo "<td>".$note["subject"]."</td>";
					echo "<td>".$note["section"]."</td>";
					echo "<td>".$note["topic"]."</td>";
					echo "<td>".$note["description"]."</td>";
					
					
					echo '<td><a href="editnote_tr.php?no='.$note["no"].'" >Edit</a></td>';
					echo '<td><a href="controllers/notedeletecontroller_tr.php?no='.$note["no"].'" >Delete</a></td>';
					echo "</tr>";
				}
			?> 
								

                 
                 </table> 
				          <br>
					  <div>
			               <a href="add note_tr.php"  class="button">Back</a>
			           </div>
	            </form>
	          </fieldset>
      </body>

</html>