<?php

include('../db.php');
include("function.php");

if(isset($_POST["news_ID"]))
{
	
	$statement = $conn->prepare(
		"DELETE FROM `news` WHERE news_ID = :news_ID"
	);
	$result = $statement->execute(
		array(
			':news_ID'	=>	$_POST["news_ID"]
		)
	);
	
	if(!empty($result))
	{
		echo 'Data Deleted';
	}
}



?>