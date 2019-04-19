<?php

include('../db.php');
include("function.php");

if(isset($_POST["admission_ID"]))
{
	
	$statement = $conn->prepare(
		"DELETE FROM `admission` WHERE admission_ID = :admission_ID"
	);
	$result = $statement->execute(
		array(
			':admission_ID'	=>	$_POST["admission_ID"]
		)
	);
	
	if(!empty($result))
	{
		echo 'Data Deleted';
	}
}



?>