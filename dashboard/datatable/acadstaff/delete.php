<?php

include('../db.php');
include("function.php");

if(isset($_POST["acs_ID"]))
{
	
	$statement = $conn->prepare(
		"DELETE FROM `acad_staff` WHERE `acad_staff`.`acs_ID` = :acs_ID"
	);
	$result = $statement->execute(
		array(
			':acs_ID'	=>	$_POST["acs_ID"]
		)
	);
	
	if(!empty($result))
	{
		echo 'Data Deleted';
	}
}



?>