<?php
include('db.php');
include('function.php');
if(isset($_POST["rtd_ID"]))
{
	$output = array();
	$statement = $conn->prepare(
		"SELECT * FROM `record_teacher_detail`
		WHERE rtd_ID = '".$_POST["rtd_ID"]."' 
		LIMIT 1"
	);
	$statement->execute();
	$result = $statement->fetchAll();
	foreach($result as $row)
	{

		$output["teacher_EmpID"] = $row["rtd_EmpID"];
		$output["teacher_FName"] = $row["rtd_FName"];
		$output["teacher_MName"] = $row["rtd_MName"];
		$output["teacher_LName"] = $row["rtd_LName"];
		$output["teacher_suffix"] = $row["suffix_ID"];
		$output["teacher_sex"] = $row["sex_ID"];
	
	}
	echo json_encode($output);
}
?>