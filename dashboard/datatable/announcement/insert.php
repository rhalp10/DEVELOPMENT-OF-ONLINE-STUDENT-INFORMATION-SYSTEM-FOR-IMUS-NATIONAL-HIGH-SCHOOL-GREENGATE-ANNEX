<?php
include('db.php');
include('function.php');
if(isset($_POST["operation"]))
{

	if($_POST["operation"] == "Add")
	{
		
		$announcement_title = $_POST["announcement_title"];
		$announcement_content = $_POST["announcement_content"];
		$sql = "INSERT INTO `room_announcements` (`ann_Title`, `ann_desc`) VALUES (:announcement_title, :announcement_content);";
		$statement = $conn->prepare($sql);
		
		$result = $statement->execute(
			array(
				':announcement_title'			=>	$announcement_title,
				':announcement_content'			=>	$announcement_content
			)
		);

		if(!empty($result))
		{
			echo 'Successfully Section Added';
		}
	}

	if($_POST["operation"] == "Edit")
	{
		
		$ann_ID = $_POST["ann_ID"];
		$announcement_title = $_POST["announcement_title"];
		$announcement_content = $_POST["announcement_content"];
		echo $sql ="UPDATE `room_announcements` SET `ann_Title` = :announcement_title, `ann_desc` = :announcement_content WHERE `room_announcements`.`ann_ID` = :ann_ID;";
		
		$statement = $conn->prepare($sql);
		
		$result = $statement->execute(
				array(
				':ann_ID'					=>	$ann_ID,
				':announcement_title'			=>	$announcement_title,
				':announcement_content'			=>	$announcement_content
				)
			);
		if(!empty($result))
		{
			echo 'Data Updated';
		}
	}
}
?>
