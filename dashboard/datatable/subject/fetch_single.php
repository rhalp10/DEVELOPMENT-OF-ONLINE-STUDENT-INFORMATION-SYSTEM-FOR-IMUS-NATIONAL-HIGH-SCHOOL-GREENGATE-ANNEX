<?php
include('db.php');
include('function.php');
if(isset($_POST["subject_ID"]))
{
	$output = array();
	$statement = $conn->prepare(
		"SELECT * FROM `subject`
		WHERE subject_ID = '".$_POST["subject_ID"]."' 
		LIMIT 1"
	);
	$statement->execute();
	$result = $statement->fetchAll();
	foreach($result as $row)
	{

		$output["subject_Code"] = $row["subject_code"];
		$output["subject_Title"] = $row["subject_TItle"];
		$output["subject_Abbreviation"] = $row["Abbreviation"];
	
	}
	echo json_encode($output);
}
?>