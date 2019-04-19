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
		 $sql ="UPDATE `semester` SET `semester_start` = :sem_Start, `semester_end` = :sem_End, `semester_stat` = :sem_Status WHERE `semester`.`semester_ID` = :semester_ID;";
		
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
}
?>
