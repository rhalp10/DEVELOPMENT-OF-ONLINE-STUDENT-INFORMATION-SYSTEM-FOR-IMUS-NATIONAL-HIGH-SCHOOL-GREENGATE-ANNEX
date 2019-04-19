<?php
include('../db.php');
include('function.php');
if(isset($_POST["operation"]))
{

	if($_POST["operation"] == "Add")
	{
		
		$news_title = $_POST["news_title"];
		$news_content = $_POST["news_content"];

			$sql = "INSERT INTO `news` (`news_ID`, `news_Title`, `news_Content`, `news_Pub`) VALUES (NULL, :news_title, :news_content, CURRENT_TIMESTAMP);";
			$statement = $conn->prepare($sql);
			
			$result = $statement->execute(
				array(
					':news_title'			=>	$news_title,
					':news_content'		=>	$news_content
				)
			);

			if(!empty($result))
			{
				echo 'Successfully News Added';
			}

		

	
	}

	if($_POST["operation"] == "Edit")
	{
		
		$news_ID = $_POST["news_ID"];

		$news_title = $_POST["news_title"];
		$news_content = $_POST["news_content"];

			$sql = "UPDATE `news` SET `news_Title` = :news_title,`news_Content` = :news_content WHERE `news`.`news_ID` = :news_ID;";
			$statement = $conn->prepare($sql);
			
			$result = $statement->execute(
				array(
					':news_ID'		=>	$news_ID,
					':news_title'		=>	$news_title,
					':news_content'		=>	$news_content
				)
			);

			if(!empty($result))
			{
				echo 'Successfully News Update';
			}

	}
}
?>
