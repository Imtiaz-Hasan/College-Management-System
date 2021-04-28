<?php
  require_once 'controllers/result controller_tr.php';
  
	  $view = getViewResult();

    session_start();
	
?>


<html>
   <head> 
	
	  
   </head>
   
    <body>
	
	<fieldset style ="width:700px">
      
      
          <legend><h1> View Result </h1> </legend>
		  
		  <div id="">
	  <input type="text" id="search_text" onkeyup="suggest(this)" class="form-control" placeholder="Search by subject.."><br>
	         <p id="suggestion">
			 </p>
      
	         <form action="" method="post">
			 
			 
	  
	   <table border= "1" style="border-collapse: collapse" align="center" >
	   
  	<thead>
			<th>Sl No</th>
			<th> Department</th>
			<th>Subject </th>
			<th> Section</th>
			<th> Passed</th>
			<th>Failed</th>
			<th> Publish Date</th>
			
			<th></th>
			<th></th>
			
		</thead>
		<tbody>
			<?php
				foreach($view as $result){
					echo "<tr>";
					echo "<td>".$result["no"]."</td>";
					echo "<td>".$result["department"]."</td>";
					echo "<td>".$result["subject"]."</td>";
					echo "<td>".$result["section"]."</td>";
					echo "<td>".$result["passed"]."</td>";
					echo "<td>".$result["failed"]."</td>";
					echo "<td>".$result["date"]."</td>";
					
					
					
					echo '<td><a href="editresult_tr.php?no='.$result["no"].'" >Edit</a></td>';
					echo '<td><a href="controllers/resultdeletecontroller_tr.php?no='.$result["no"].'" >Delete</a></td>';
					echo "</tr>";
				}
			?> 
							
  
  
                 </table> 
				  <br>
					  <div>
			               <a href="add result_tr.php"  class="button">Back</a>
			           </div>
						
	            </form>
	          </fieldset>
      </body>
	  
	  <script src="js/resultsearch_tr.js"></script>

</html>