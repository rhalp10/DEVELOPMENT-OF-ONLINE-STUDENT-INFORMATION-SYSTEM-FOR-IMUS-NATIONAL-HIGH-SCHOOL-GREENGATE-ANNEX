<?php
include('db.php');
include('function.php');
if(isset($_POST["operation"]))
{

	if($_POST["operation"] == "Add")
	{
		
		$teacherID = $_POST["teacherID"];
		$subjectID = $_POST["subjectID"];
		$semID = $_POST["semID"];
		$secID = $_POST["secID"];
		$ylID = $_POST["ylID"];
		
		
			
	

			$sql = "INSERT INTO `teacher_subject_assign` (
			`tsa_ID`,
			 `rtd_ID`,
			  `subject_ID`,
			   `semester_ID`,
			   `section_ID`,
				`yl_ID`) VALUES (NULL, :teacherID, :subjectID, :semID, :secID, :ylID);";
			$statement = $conn->prepare($sql);
			
			$result = $statement->execute(
				array(	
					':teacherID' 	=> $teacherID,
					':subjectID' 	=> $subjectID,
					':semID' 	=> $semID,
					':secID' 	=> $secID,
					':ylID' 	=> $ylID
				)
			);

			if(!empty($result))
			{
				echo 'Successfully Teacher Assign in Subject';
			}
	
	}

	if($_POST["operation"] == "Edit")
	{
		
		$tsa_ID = $_POST["tsa_ID"];
		
		$teacherID = $_POST["teacherID"];
		$subjectID = $_POST["subjectID"];
		$semID = $_POST["semID"];
		$secID = $_POST["secID"];
		$ylID = $_POST["ylID"];
		
		$sql = "UPDATE `teacher_subject_assign` 
		SET 
		`rtd_ID` = :teacherID,
		`subject_ID` = :subjectID ,
		`semester_ID` = :semID ,
		`section_ID` = :secID ,
		`yl_ID` = :ylID 
		WHERE `teacher_subject_assign`.`tsa_ID` = :tsa_ID;";
		$statement = $conn->prepare($sql);
		
		$result = $statement->execute(
			array(	
				':tsa_ID' 		=> $tsa_ID,
				':teacherID' 	=> $teacherID,
					':subjectID' => $subjectID,
					':semID' 	=> $semID,
					':secID' 	=> $secID,
					':ylID' 	=> $ylID
			)
		);

		if(!empty($result))
		{
			echo 'Successfully Update Teacher Assign in Subject';
		}
	}
}
?>
