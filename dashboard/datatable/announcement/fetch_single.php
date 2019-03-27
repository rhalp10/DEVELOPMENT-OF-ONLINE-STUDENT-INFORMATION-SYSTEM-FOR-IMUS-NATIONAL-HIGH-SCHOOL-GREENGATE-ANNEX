<?php
include('db.php');
include('function.php');
if(isset($_POST["ann_ID"]))
{
	$output = array();
	$statement = $conn->prepare(
		"SELECT * FROM `room_announcements`
		WHERE ann_ID = '".$_POST["ann_ID"]."' 
		LIMIT 1"
	);
	$statement->execute();
	$result = $statement->fetchAll();
	foreach($result as $row)
	{

		$output["ann_Title"] = $row["ann_Title"];
		$output["ann_desc"] = $row["ann_desc"];
		$output["ann_Date"] = $row["ann_Date"];
	
	}
	echo json_encode($output);
}
?>