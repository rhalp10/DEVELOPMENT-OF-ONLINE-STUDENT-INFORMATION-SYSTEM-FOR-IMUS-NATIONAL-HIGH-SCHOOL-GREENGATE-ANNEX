<?php
include('../db.php');
include('function.php');
if (isset($_POST['secID_z'])) {

	$output = array();
	$statement = $conn->prepare(
		"SELECT * FROM `record_studentgrade` WHERE tsa_ID = '".$_POST["secID_z"]."' AND recs_ID = '".$_POST["recs_ID"]."'
		LIMIT 1"
	);
	$statement->execute();
	$result = $statement->fetchAll();
	foreach($result as $row)
	{

		$output["first"] = $row["first"];
		$output["second"] = $row["second"];
		$output["third"] = $row["third"];
		$output["fourth"] = $row["fourth"];
		$output["final"] = $row["final"];
		$output["remarks"] = $row["remarks"];
	}
	if(empty($result))
	{
		$output["first"] = "";
		$output["second"] = "";
		$output["third"] = "";
		$output["fourth"] = "";
		$output["final"] =  "";
		$output["remarks"] =  "";
	}
	echo json_encode($output);
}

?>



