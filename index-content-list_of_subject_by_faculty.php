<?php 
	include('dbconfig.php');
?>
<div  style="width: auto; padding: 20px;background-color: #1b621e;  color: white;">
<h2>Academic Staff</h2>
<hr>
</div>
<br>
<?php 
			// SQL query to fetch information of registerd users and finds user match.
			$query = mysqli_query($con,"SELECT * FROM `subject`");
			if (mysqli_num_rows($query) > 0) 
			{
				// And error has occured while executing
			   while ($rows = mysqli_fetch_assoc($query)) {
			   	 $subject_TItle = $rows['subject_TItle'];
			   	  	 $subject_ID = $rows['subject_ID'];		
			 
			   	 $sql = "SELECT * FROM `acad_staff` WHERE `subject_ID`  = $subject_ID"	 ;
			   	 	$query1 = mysqli_query($con,$sql);  	
			   	?>
					<div class="col-sm-4">
						<div class="panel panel-default">
						  <div class="panel-heading"><?php echo $subject_TItle?> </div>
						  <div class="panel-body" style="padding: 0px; min-height: 350px;">
						  	<table class="table table-bordered">
						  		<thead>
						  		<th>Name</th>
						  		<th>Position</th>
						  		</thead>
						  		<tbody>
						  			<?php 
						  			  while ($rows1 = mysqli_fetch_assoc($query1)) {
						  			  	?>
						  			  	<tr>
						  				<td><?php echo $rows1["name"]?> </td>
						  				<td><?php echo $rows1["position"]?> </td>
						  			</tr>
						  			  	<?php
						  			  }
						  			?>
						  			
						  			
						  		</tbody>
						  	</table>
						</div>
						<div class="panel-footer" style="padding: 10px;">
							
						</div>
						</div>

					</div>
					<?php
			   }
				
			
			}



?>