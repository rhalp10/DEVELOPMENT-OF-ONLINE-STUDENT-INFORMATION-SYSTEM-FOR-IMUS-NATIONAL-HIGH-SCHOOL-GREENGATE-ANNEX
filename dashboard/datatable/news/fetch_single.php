<?php
include('../db.php');
include('function.php');

if(isset($_POST["news_ID"]))
{
	$output = array();
	$statement = $conn->prepare(
		"SELECT * FROM `news`
		WHERE news_ID = '".$_POST["news_ID"]."' 
		LIMIT 1"
	);
	$statement->execute();
	$result = $statement->fetchAll();
	foreach($result as $row)
	{

	$output["news_Title"] = $row["news_Title"];
	$output["news_Content"] = $row["news_Content"];
	$output["news_Pub"] = $row["news_Pub"];
	
	}
	echo json_encode($output);
}
?>
