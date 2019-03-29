<?php

include('db.php');
include("function.php");

if(isset($_POST["subject_ID"]))
{
	
	$statement = $conn->prepare(
		"DELETE FROM `subject_ID` WHERE subject_ID = :subject_ID"
	);
	$result = $statement->execute(
		array(
			':subject_ID'	=>	$_POST["subject_ID"]
		)
	);
	
	if(!empty($result))
	{
		echo 'Data Deleted';
	}
}



?>