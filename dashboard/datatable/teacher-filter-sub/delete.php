<?php

include('../db.php');
include("function.php");

if(isset($_POST["semester_ID"]))
{
	
	$statement = $conn->prepare(
		"DELETE FROM `semester` WHERE semester_ID = :semester_ID"
	);
	$result = $statement->execute(
		array(
			':semester_ID'	=>	$_POST["semester_ID"]
		)
	);
	
	if(!empty($result))
	{
		echo 'Data Deleted';
	}
}



?>