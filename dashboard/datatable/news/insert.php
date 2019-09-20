<?php
require_once('../class.function.php');
$account = new DTFunction(); 
if(isset($_POST["operation"]))
{

	if($_POST["operation"] == "submit_news")
	{	
		try
		{
			$news_title = $_POST["news_title"];
			$news_content = $_POST["news_content"];

			$sql = "INSERT INTO `news` 
				(
				`news_ID`,
				 `news_Title`,
				  `news_Content`,
				   `news_Pub`) 
				VALUES (
				NULL,
				 :news_title,
				  :news_content,
				   CURRENT_TIMESTAMP);";
				$statement = $account->runQuery($sql);
					
				$result = $statement->execute(
				array(

						':news_title'		=>	$news_title ,
						':news_content'		=>	$news_content ,
					)
				);
				if(!empty($result))
				{
					echo 'Successfully Added';
				}

		}
		catch (PDOException $e)
		{
		    echo "There is some problem in connection: " . $e->getMessage();
		}
		
	}

	if($_POST["operation"] == "news_edit")
	{
		
		

		$news_title = $_POST["news_title"];
		$news_content = $_POST["news_content"];

		$sql = "UPDATE `news` 
		SET 
		`news_Title` = :news_title,  
		`news_Content` = :news_content 
		WHERE 
		`news_ID` = :news_ID;";
		$statement = $account->runQuery($sql);
			
		$result = $statement->execute(
		array(
				':news_ID'	=>	$_POST["news_ID"],
				':news_title'		=>	$news_title ,
				':news_content'		=>	$news_content ,
			)
		);
		if(!empty($result))
		{
			echo 'Successfully Updated';
		}
	
	}

	if($_POST["operation"] == "delete_News")
	{
		$statement = $account->runQuery(
			"DELETE FROM `news` WHERE `news_ID` = :news_ID"
		);
		$result = $statement->execute(
			array(
				':news_ID'	=>	$_POST["news_ID"]
			)
		);
		
		if(!empty($result))
		{
			echo 'Successfully Deleted';
		}
		
	
	}
}
?>

