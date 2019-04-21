<?php
include('../db.php');
include('function.php');
if (isset($_POST['secID_z'])) {

	$output = array();
	$statement = $conn->prepare(
		"SELECT * FROM `record_studentlearnerobserve` WHERE tsa_ID = '".$_POST["secID_z"]."' and recs_ID = '".$_POST["recs_ID"]."'
		LIMIT 1"
	);
	$statement->execute();
	$result = $statement->fetchAll();
	foreach($result as $row)
	{
		$learnervalues = json_decode($row["learnervalues"]);

		$output['learnervalues'] = array_chunk($learnervalues, 4);

	}
	if(empty($result))
	{
		

		$output['status'] = "error";
	}
	echo json_encode($output,JSON_UNESCAPED_SLASHES);

}

?>



