<?php

require_once 'controllers/pmeeting controller_tr.php';
	  $view = getViewPmeeting();

    session_start();
	
?>
<html>
   <head> 
	  
	  
   </head>
   
    <body>
      <fieldset style ="width:900px">
          <legend><h1> View Parent Meeting </h1></legend>
      
	         <form action="" method="post">
	  
	           <table border= "1" style="border-collapse: collapse" align="center" >
				
					
					<thead>
			<th>Sl#</th>
			<th> Date</th>
			<th> Name</th>
			<th> Department</th>
			
			<th> Section</th>
			<th> Topic</th>
			
			
			<th></th>
			<th></th>
			
		</thead>
		<tbody>
			<?php
				foreach($view as $pmeeting){
					echo "<tr>";
					echo "<td>".$pmeeting["no"]."</td>";
					echo "<td>".$pmeeting["date"]."</td>";
					echo "<td>".$pmeeting["name"]."</td>";
					echo "<td>".$pmeeting["department"]."</td>";
					
					echo "<td>".$pmeeting["section"]."</td>";
					echo "<td>".$pmeeting["topic"]."</td>";
					
					
					
					echo '<td><a href="editpmeeting_tr.php?no='.$pmeeting["no"].'" >Edit</a></td>';
					
					echo "</tr>";
				}
			?> 
								

                 
                 </table> 
				          <br>
					  <div>
			               <a href="confirm_tr.php"  class="button">Back</a>
			           </div>
	            </form>
	          </fieldset>
      </body>

</html>