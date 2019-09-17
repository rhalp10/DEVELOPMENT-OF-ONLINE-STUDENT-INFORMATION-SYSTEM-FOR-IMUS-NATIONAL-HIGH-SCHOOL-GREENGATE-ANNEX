<?php
require_once('../class.function.php');
$account = new DTFunction(); 
if(isset($_POST["operation"]))
{

	if($_POST["operation"] == "submit_staff")
	{	
		try
		{
			$staff_semester = $_POST["staff_semester"];
			$staff_subject = $_POST["staff_subject"];
			$staff_position = $_POST["staff_position"];
			$teacher_ID = $_POST["teacher_ID"];
			$staff_position = $_POST["staff_position"];

			$sql = "INSERT INTO 
			`academic_staff` 
			(`acs_ID`, `rid_ID`, `pos_ID`, `subject_ID`, `sem_ID`) 
			VALUES (
			NULL,
			 :teacher_ID,
			  :staff_position,
			   :staff_subject,
			    :staff_semester);";
				$statement = $account->runQuery($sql);
					
				$result = $statement->execute(
				array(

						':staff_semester'		=>	$staff_semester ,
						':staff_subject'		=>	$staff_subject ,
						':staff_position'		=>	$staff_position ,
						':teacher_ID'			=>	$teacher_ID ,
						':staff_position'		=>	$staff_position ,
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

	if($_POST["operation"] == "staff_edit")
	{
		
		

		$staff_ID = $_POST["staff_ID"];
		$staff_semester = $_POST["staff_semester"];
		$staff_subject = $_POST["staff_subject"];
		$staff_position = $_POST["staff_position"];

		$sql = "UPDATE `academic_staff` 
		SET 
		`sem_ID` = :staff_semester,
		`subject_ID` = :staff_subject,
		`pos_ID` = :staff_position

		 WHERE `acs_ID` =  :staff_ID;";
		$statement = $account->runQuery($sql);
			
		$result = $statement->execute(
		array(
				':staff_ID'				=>	$staff_ID,
				':staff_semester'		=>	$staff_semester ,
				':staff_subject'		=>	$staff_subject ,
				':staff_position'		=>	$staff_position ,
			)
		);
		if(!empty($result))
		{
			echo 'Successfully Updated';
		}
	
	}

	if($_POST["operation"] == "delete_staff")
	{
		$statement = $account->runQuery(
			"DELETE FROM `academic_staff` WHERE `acs_ID` = :acs_ID"
		);
		$result = $statement->execute(
			array(
				':acs_ID'	=>	$_POST["staff_ID"]
			)
		);
		
		if(!empty($result))
		{
			echo 'Successfully Deleted';
		}
		
	
	}
}
?>

