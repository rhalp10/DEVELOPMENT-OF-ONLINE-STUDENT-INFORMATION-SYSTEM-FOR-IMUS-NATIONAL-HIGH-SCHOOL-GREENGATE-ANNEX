<?php
include('db.php');
include('function.php');
if(isset($_POST["admission_ID"]))
{
	$output = array();
	$statement = $conn->prepare(
		"SELECT * FROM `admission`
		WHERE admission_ID = '".$_POST["admission_ID"]."' 
		LIMIT 1"
	);
	$statement->execute();
	$result = $statement->fetchAll();
	foreach($result as $row)
	{

		$output["admission_FName"] 	= $row["admission_FName"];
		$output["admission_MName"] 	= $row["admission_MName"];
		$output["admission_LName"] 	= $row["admission_LName"];
		$output["admission_LSch"] 	= $row["admission_LSch"];
		$output["admission_Bday"] 	= $row["admission_Bday"];
		$output["admission_MNum"] 	= $row["admission_MNum"];
		$output["sex_ID"] 			= $row["sex_ID"];
		$output["citizenship"] 		= $row["admission_Ctzen"];
		$output["email"] 			= $row["admission_Email"];
		$output["admission_Status"] 			= $row["admission_Status"];
		
	
	}
	echo json_encode($output);
}
?>