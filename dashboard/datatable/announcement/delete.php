<?php

include('db.php');
include("function.php");

if(isset($_POST["ann_ID"]))
{
	
	$statement = $conn->prepare(
		"DELETE FROM `room_announcements` WHERE ann_ID = :ann_ID"
	);
	$result = $statement->execute(
		array(
			':ann_ID'	=>	$_POST["ann_ID"]
		)
	);
	
	if(!empty($result))
	{
		echo 'Data Deleted';
	}
}



?>