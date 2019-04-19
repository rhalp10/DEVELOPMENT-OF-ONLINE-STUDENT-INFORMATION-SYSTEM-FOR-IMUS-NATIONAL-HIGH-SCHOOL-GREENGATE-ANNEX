<?php
include('../db.php');
include('function.php');
if(isset($_POST["operation"]))
{

	if($_POST["operation"] == "Add")
	{
		
		$sem_Start = $_POST["semester_Start"];
		$sem_End = $_POST["semester_End"];
		$sem_Status = $_POST["semester_Stat"];
		$sql = "INSERT INTO `semester` (`semester_ID`, `semester_start`, `semester_end`, `semester_stat`) VALUES (NULL, :sem_Start, :sem_End, :sem_Status);";


		$statement = $conn->prepare($sql);
		
		$result = $statement->execute(
			array(
				':sem_Start'			=>	$sem_Start,
				':sem_End'				=>	$sem_End,
				':sem_Status'			=>	$sem_Status
			)
		);

		if(!empty($result))
		{
			echo 'Successfully Semester Added';
		}
	}

	if($_POST["operation"] == "Edit")
	{

		$semester_ID = $_POST["semester_ID"];
		
		$sem_Start = $_POST["semester_Start"];
		$sem_End = $_POST["semester_End"];
		$sem_Status = $_POST["semester_Stat"];
		echo $sql ="UPDATE `semester` SET `semester_start` = :sem_Start, `semester_end` = :sem_End, `semester_stat` = :sem_Status WHERE `semester`.`semester_ID` = :semester_ID;";
		
		$statement = $conn->prepare($sql);
		
		$result = $statement->execute(
				array(
					':semester_ID'	=>	$semester_ID,
					':sem_Start'	=>	$sem_Start,
					':sem_End'		=>	$sem_End,
					':sem_Status'	=>	$sem_Status
				)
			);
		if(!empty($result))
		{
			echo 'Data Updated';
		}
	}
	if($_POST["operation"] == "AddStudInSec")
	{
		$secID = $_POST["secID"];
		
		$stud_ID = $_POST["stud_ID"];
		$sql ="INSERT INTO `record_studentenrolled` (`recs_ID`, `tsa_ID`, `rsd_ID`) VALUES (NULL, :secID, :stud_ID);";
		
		$statement = $conn->prepare($sql);
		
		$result = $statement->execute(
				array(
					':secID'	=>	$secID,
					':stud_ID'	=>	$stud_ID,
				)
			);
		if(!empty($result))
		{
			echo 'Student Add To this Section';
		}
	}
	if($_POST["operation"] == "RemoveStudInSec")
	{
		$statement = $conn->prepare(
		"DELETE FROM `record_studentenrolled` WHERE recs_ID = :recs_ID"
		);
		$result = $statement->execute(
			array(
				':recs_ID'	=>	$_POST["recs_ID"]
			)
		);
		
		if(!empty($result))
		{
			echo 'Student Remove';
		}

	}
	
}
?>
