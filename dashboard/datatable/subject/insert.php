<?php
include('db.php');
include('function.php');
if(isset($_POST["operation"]))
{

	if($_POST["operation"] == "Add")
	{
		
		$subject_Code = $_POST["subject_Code"];
		$subject_Title = $_POST["subject_Title"];
		$subject_Abbreviation = $_POST["subject_Abbreviation"];
		$sql = "INSERT INTO `subject` (`subject_code`, `subject_TItle`, `Abbreviation`) VALUES ( :subject_Code, :subject_Title, :subject_Abbreviation);";
		$statement = $conn->prepare($sql);
		
		$result = $statement->execute(
			array(
				':subject_Code'			=>	$subject_Code,
				':subject_Title'			=>	$subject_Title,
				':subject_Abbreviation'			=>	$subject_Abbreviation
			)
		);

		if(!empty($result))
		{
			echo 'Successfully Section Added';
		}
	}

	if($_POST["operation"] == "Edit")
	{
		
		$subject_ID = $_POST["subject_ID"];
		$subject_Code = $_POST["subject_Code"];
		$subject_Title = $_POST["subject_Title"];
		$subject_Abbreviation = $_POST["subject_Abbreviation"];
		$sql ="UPDATE `subject` SET `subject_Code` = :subject_Code,`subject_TItle` = :subject_Title,`Abbreviation` = :subject_Abbreviation WHERE `subject`.`subject_ID` = :subject_ID;";
		
		$statement = $conn->prepare($sql);
		
		$result = $statement->execute(
				array(
					':subject_ID'			=>	$subject_ID,
					':subject_Code'			=>	$subject_Code,
					':subject_Title'			=>	$subject_Title,
					':subject_Abbreviation'			=>	$subject_Abbreviation
				)
			);
		if(!empty($result))
		{
			echo 'Data Updated';
		}
	}
}
?>
