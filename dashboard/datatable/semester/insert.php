<?php
include('db.php');
include('function.php');
if(isset($_POST["operation"]))
{

	if($_POST["operation"] == "Add")
	{
		
		$sem_Start = $_POST["semester_Start"];
		$sem_End = $_POST["semester_End"];
		$sem_Status = $_POST["semester_Stat"];
		$sql = "INSERT INTO `ref_semester` (`sem_ID`, `sem_Start`, `sem_End`, `sem_Status`) VALUES (NULL, :sem_Start, :sem_End, :sem_Status);";


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
		echo $sql ="UPDATE `ref_semester` SET `sem_Start` = :sem_Start, `sem_End` = :sem_End, `sem_Status` = :sem_Status WHERE `ref_semester`.`sem_ID` = :semester_ID;";
		
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
