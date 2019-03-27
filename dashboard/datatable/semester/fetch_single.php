<?php
include('db.php');
include('function.php');
if(isset($_POST["semester_ID"]))
{
	$output = array();
	$statement = $conn->prepare(
		"SELECT * FROM `ref_semester`
		WHERE sem_ID = '".$_POST["semester_ID"]."' 
		LIMIT 1"
	);
	$statement->execute();
	$result = $statement->fetchAll();
	foreach($result as $row)
	{

		$output["sem_Start"] = $row["sem_Start"];
		$output["sem_End"] = $row["sem_End"];
		$output["sem_Status"] = $row["sem_Status"];
	
	}
	echo json_encode($output);
}
?>