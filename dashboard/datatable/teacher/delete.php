<?php

include('db.php');
include("function.php");

if(isset($_POST["rtd_ID"]))
{
	
	$statement = $conn->prepare(
		"DELETE FROM `record_teacher_detail` WHERE rtd_ID = :rtd_ID"
	);
	$result = $statement->execute(
		array(
			':rtd_ID'	=>	$_POST["rtd_ID"]
		)
	);
	
	if(!empty($result))
	{
		echo 'Data Deleted';
	}
}



?>