<?php
include('../db.php');
include('function.php');
if(isset($_POST["semester_ID"]))
{
	$output = array();
	$statement = $conn->prepare(
		"SELECT * FROM `semester`
		WHERE semester_ID = '".$_POST["semester_ID"]."' 
		LIMIT 1"
	);
	$statement->execute();
	$result = $statement->fetchAll();
	foreach($result as $row)
	{

		$output["semester_Start"] = $row["semester_start"];
		$output["semester_End"] = $row["semester_end"];
		$output["semester_Stat"] = $row["semester_stat"];
	
	}
	echo json_encode($output);
}
?>