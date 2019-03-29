<?php

include('db.php');
include("function.php");

if(isset($_POST["yl_ID"]))
{
	
	$statement = $conn->prepare(
		"DELETE FROM `year_level` WHERE yl_ID = :yl_ID"
	);
	$result = $statement->execute(
		array(
			':yl_ID'	=>	$_POST["yl_ID"]
		)
	);
	
	if(!empty($result))
	{
		echo 'Data Deleted';
	}
}



?>