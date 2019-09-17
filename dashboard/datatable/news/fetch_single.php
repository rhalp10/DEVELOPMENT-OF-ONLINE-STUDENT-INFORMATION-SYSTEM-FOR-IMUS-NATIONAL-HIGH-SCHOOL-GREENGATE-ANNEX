<?php
require_once('../class.function.php');
$account = new DTFunction(); 

if (isset($_POST['action'])) {
	
	$output = array();
	$stmt = $account->runQuery("SELECT * FROM `news` WHERE news_ID  = '".$_POST["news_ID"]."' 
			LIMIT 1");
	$stmt->execute();
	$result = $stmt->fetchAll();
	foreach($result as $row)
	{

	
		
		$output["news_ID"] = $row["news_ID"];
		$output["news_Title"] = $row["news_Title"];
		$output["news_Content"] = $row["news_Content"];
	
	}
	
	echo json_encode($output);
	
}









 

?>