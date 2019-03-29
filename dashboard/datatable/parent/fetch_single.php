<?php
include('db.php');
include('function.php');
if(isset($_POST["parent_ID"]))
{
	$output = array();
	$statement = $conn->prepare(
		"SELECT * FROM `record_parent_details` `rpd` INNER JOIN `record_student_details` `rsd` ON `rpd`.`rsd_ID` = `rsd`.`rsd_ID` INNER JOIN `ref_sex` `rsp` ON `rpd`.sex_ID = `rsp`.`sex_ID` WHERE `rpd`.parent_ID =  '".$_POST["parent_ID"]."' 
		LIMIT 1"
	);
	$statement->execute();
	$result = $statement->fetchAll();
	foreach($result as $row)
	{
		$output["studentLRN"] = $row["rsd_LRN"];
		$output["firstname"] = $row["parent_FName"];
		$output["middlename"] = $row["parent_MName"];
		$output["lastname"] = $row["parent_LName"];
		$output["suffix"] = $row["suffix_ID"];
		$output["sex"] = $row["sex_ID"];
		$output["contact"] = $row["parent_Contact"];
		$output["address"] = $row["parent_Address"];
	
	}
	echo json_encode($output);
}
?>