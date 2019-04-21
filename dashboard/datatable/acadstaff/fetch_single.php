<?php
include('../db.php');
include('function.php');
if(isset($_POST["acs_ID"]))
{
	$output = array();
	$statement = $conn->prepare(
		"SELECT * FROM `acad_staff`
		WHERE acs_ID = '".$_POST["acs_ID"]."' 
		LIMIT 1"
	);
	$statement->execute();
	$result = $statement->fetchAll();
	foreach($result as $row)
	{

		$output["name"] = $row["name"];
		$output["position"] = $row["position"];
		$output["subject_ID"] = $row["subject_ID"];
	
	}
	echo json_encode($output);
}
?>