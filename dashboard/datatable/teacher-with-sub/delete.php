<?php

include('db.php');
include("function.php");

if(isset($_POST["tsa_ID"]))
{
	
	$statement = $conn->prepare(
		"DELETE FROM `teacher_subject_assign` WHERE tsa_ID = :tsa_ID"
	);
	$result = $statement->execute(
		array(
			':tsa_ID'	=>	$_POST["tsa_ID"]
		)
	);
	
	if(!empty($result))
	{
		echo 'Data Deleted';
	}
}



?>