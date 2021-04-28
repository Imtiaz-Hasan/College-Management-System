<?php

require_once 'controllers/notice controller_tr.php';
	  $view = getViewNotice();

    session_start();
	
?>
<html>
   <head> 
	  
	  
   </head>
   
    <body>
      <fieldset style ="width:900px">
          <legend><h1> View Notice </h1></legend>
      <div id="">
	  <input type="text" id="search_text" onkeyup="suggest(this)" class="form-control" placeholder="Search.."><br>
	         <p id="suggestion">
			 </p>
	</div>	
	         <form action="" method="post">
			 
			 
	  
	            <table>
				
					
					<thead>
			<th>Sl No</th>
			<th> Department</th>
			<th>Subject </th>
			<th> Section</th>
			<th> Title</th>
			<th> Notice</th>
			<th> Date</th>
			<th></th>
			<th></th>
			
		</thead>
		<tbody>
			<?php
				foreach($view as $notice){
					echo "<tr>";
					echo "<td>".$notice["no"]."</td>";
					echo "<td>".$notice["department"]."</td>";
					echo "<td>".$notice["subject"]."</td>";
					echo "<td>".$notice["section"]."</td>";
					echo "<td>".$notice["title"]."</td>";
					echo "<td>".$notice["description"]."</td>";
					echo "<td>".$notice["date"]."</td>";
					
					
					echo '<td><a href="editnotice_tr.php?no='.$notice["no"].'" >Edit</a></td>';
					echo '<td><a href="controllers/noticedeletecontroller_tr.php?no='.$notice["no"].'" >Delete</a></td>';
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
         <script src="js/noticesearch_tr.js"></script>
</html>