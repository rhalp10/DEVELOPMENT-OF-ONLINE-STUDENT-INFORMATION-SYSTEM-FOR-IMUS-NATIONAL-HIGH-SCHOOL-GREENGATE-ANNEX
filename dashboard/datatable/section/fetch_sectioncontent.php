<?php
include('db.php');
include('function.php');
if(isset($_POST["section_ID"]))
{
	$output = array();
	$statement = $conn->prepare(
		"SELECT * FROM `section_student` sstd 
		LEFT JOIN record_student_details rsd ON sstd.rsd_ID = rsd.rsd_ID
		LEFT JOIN ref_suffixname suffix ON rsd.suffix_ID = suffix.suffix_ID
		LEFT JOIN ref_semester sem ON sstd.sem_ID = sem.sem_ID
		LEFT JOIN ref_sex sex ON rsd.sex_ID = sex.sex_ID
		WHERE sem.sem_Status = 1 and sstd.section_ID = '".$_POST["section_ID"]."'"
	);
	$statement->execute();
	$result = $statement->fetchAll();
	$i = 1;
	?>
	<table id="" class="table table-bordered table-striped">
	   <thead>
	     <tr>
	        <th width="10%">#</th>
	        <th width="10%">LRN</th>
	        <th width="10%">Name</th>
	        <th width="10%">Semester</th>
	     </tr>
	   </thead>
	   <tbody>
	<?php
	foreach($result as $row)
	{
		$sem_Start = date("Y", strtotime($row["sem_Start"]));
		$sem_End = date("Y", strtotime($row["sem_End"]));
		?>
		   	<tr>
		   		<td><?php echo $i;?></td>
		   		<td><?php echo $row["rsd_StudNum"];?></td>
		   		<td><?php echo $row["rsd_FName"].' '.$row["rsd_MName"].' '.$row["rsd_LName"];?></td>
		   		<td><?php echo $sem_Start.' - '.$sem_End;?></td>
		   	</tr>
		<?php
	$i++;
	}

	?>
	  </tbody>
	</table>
	<?php
}
?>




