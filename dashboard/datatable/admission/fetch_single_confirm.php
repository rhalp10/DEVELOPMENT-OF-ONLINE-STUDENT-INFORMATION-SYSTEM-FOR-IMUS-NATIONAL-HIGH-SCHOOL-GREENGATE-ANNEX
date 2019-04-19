<?php
include('../db.php');
include('function.php');
if(isset($_POST["adconfirm_ID"]))
{
	$output = array();
	$statement = $conn->prepare(
		"SELECT * FROM `admission` ad
LEFT JOIN ref_sex rs ON ad.sex_ID = rs.sex_ID
LEFT JOIN year_level yl ON ad.yl_ID = yl.yl_ID
		WHERE admission_ID = '".$_POST["adconfirm_ID"]."' 
		LIMIT 1"
	);
	$statement->execute();
	$result = $statement->fetchAll();
	foreach($result as $row)
	{

		$output["admission_Name"] 		= $row["admission_Name"];
		$output["admission_bday"] 		= $row["admission_bday"];
		$output["admission_age"] 		= $row["admission_age"];
		$output["admission_height"] 	= $row["admission_height"];
		$output["admission_bmistat"] 	= $row["admission_bmistat"];
		$output["admission_weight"] 	= $row["admission_weight"];
		$output["sex_Name"] 				= $row["sex_Name"];
		$output["admission_address"] 	= $row["admission_address"];
		$output["admission_house"] 		= $row["admission_house"];
		$output["admission_parent"] 	= $row["admission_parent"];
		$output["admission_contact"] 	= $row["admission_contact"];
		$output["admission_altcontact"] = $row["admission_altcontact"];
		$output["admission_parentWork"] = $row["admission_parentWork"];

		$output["admission_living"] 	= $row["admission_living"];
		$output["admission_contact"] 	= $row["admission_contact"];
		$output["admission_FeedProgReason"] 	= $row["admission_FeedProgReason"];
		$output["admission_DewormingReason"] 	= $row["admission_DewormingReason"];
		$output["admission_medDecease"] 	= json_decode($row["admission_medDecease"]) ;
		$output["admission_medDeceaseDate"] 	= json_decode($row["admission_medDeceaseDate"]) ;
		$output["yl_Name"] 	= $row["yl_Name"];
		$output["admission_Date"] 	= $row["admission_Date"];
		$output["admission_Status"] = $row["admission_Status"];
		
	
	}
	echo json_encode($output);
}
?>