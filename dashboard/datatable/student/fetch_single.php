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

		$output["stud_lrn"] = $row["rsd_StudNum"];
		$output["stud_fname"] = $row["rsd_FName"];
		$output["stud_mname"] = $row["rsd_MName"];
		$output["stud_lname"] = $row["rsd_LName"];
		$output["stud_suffix"] = $row["suffix_ID"];
		$output["stud_sex"] = $row["sex_ID"];
	
	}
	echo json_encode($output);
}
?>