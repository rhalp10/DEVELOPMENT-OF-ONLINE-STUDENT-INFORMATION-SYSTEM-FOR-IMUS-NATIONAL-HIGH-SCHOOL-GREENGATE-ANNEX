<?php
include('../db.php');
include('function.php');
if(isset($_POST["operation"]))
{

	if($_POST["operation"] == "Add")
	{
		
		$staff_name = $_POST["staff_name"];
		$staff_position = $_POST["staff_position"];
		$subject_ID = $_POST["zsub_ID"];
		$sql = "INSERT INTO `acad_staff` (`acs_ID`, `name`, `position`, `subject_ID`) VALUES (NULL, :staff_name, :staff_position, :subject_ID);";
		$statement = $conn->prepare($sql);
		
		$result = $statement->execute(
			array(
				':subject_ID'			=>	$subject_ID,
				':staff_name'			=>	$staff_name,
				':staff_position'			=>	$staff_position
			)
		);

		if(!empty($result))
		{
			echo 'Successfully Section Added';
		}
	}

	if($_POST["operation"] == "Edit")
	{
		
		$acs_ID = $_POST["acs_ID"];
		$staff_name = $_POST["staff_name"];
		$staff_position = $_POST["staff_position"];

		$sql = "UPDATE `acad_staff` SET `name` = :staff_name,`position` = :staff_position WHERE `acad_staff`.`acs_ID` = :acs_ID;";
		$statement = $conn->prepare($sql);
		
		$result = $statement->execute(
			array(
				':acs_ID'			=>	$acs_ID,
				':staff_name'			=>	$staff_name,
				':staff_position'			=>	$staff_position
			)
		);

		if(!empty($result))
		{
			echo 'Data Updated';
		}
	}
}
?>
