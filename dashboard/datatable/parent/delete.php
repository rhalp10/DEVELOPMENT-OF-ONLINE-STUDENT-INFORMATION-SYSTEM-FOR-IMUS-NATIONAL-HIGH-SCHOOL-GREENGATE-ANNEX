<?php

include('db.php');
include("function.php");

if(isset($_POST["parent_ID"]))
{
	
	$statement = $conn->prepare(
		"DELETE FROM `record_student_details` WHERE parent_ID = :parent_ID"
	);
	$result = $statement->execute(
		array(
			':parent_ID'	=>	$_POST["parent_ID"]
		)
	);
	
	if(!empty($result))
	{
		echo 'Data Deleted';
	}
}



?>