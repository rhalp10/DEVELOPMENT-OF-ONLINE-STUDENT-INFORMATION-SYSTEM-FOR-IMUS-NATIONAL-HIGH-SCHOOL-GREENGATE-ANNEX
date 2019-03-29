<?php
include('db.php');
include('function.php');
if(isset($_POST["yl_ID"]))
{
	$output = array();
	$statement = $conn->prepare(
		"SELECT * FROM `year_level`
		WHERE yl_ID = '".$_POST["yl_ID"]."' 
		LIMIT 1"
	);
	$statement->execute();
	$result = $statement->fetchAll();
	foreach($result as $row)
	{

		$output["yl_Name"] = $row["yl_Name"];
	
	}
	echo json_encode($output);
}
?>