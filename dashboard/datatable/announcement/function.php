<?php
include('../../../data-md5.php');

function get_total_all_records()
{
	include('db.php');
	$statement = $conn->prepare("SELECT * FROM `room_announcements`");
	$statement->execute();
	$result = $statement->fetchAll();
	return $statement->rowCount();
}


?>