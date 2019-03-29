<?php
include('db.php');
include('function.php');
if(isset($_POST["rsd_ID"]))
{
	$output = array();
	$statement = $conn->prepare(
		"SELECT * FROM `record_student_details`
		WHERE rsd_ID = '".$_POST["rsd_ID"]."' 
		LIMIT 1"
	);
	$statement->execute();
	$result = $statement->fetchAll();
	foreach($result as $row)
	{

		$output["studentID"] = $row["rsd_LRN"];
		$output["firstname"] = $row["rsd_FName"];
		$output["middlename"] = $row["rsd_MName"];
		$output["lastname"] = $row["rsd_LName"];
		$output["suffix"] = $row["suffix_ID"];
		$output["sex"] = $row["sex_ID"];
		$output["contact"] = $row["rsd_Contact"];
		$output["address"] = $row["rsd_Address"];
	
	}
	echo json_encode($output);
}
?>