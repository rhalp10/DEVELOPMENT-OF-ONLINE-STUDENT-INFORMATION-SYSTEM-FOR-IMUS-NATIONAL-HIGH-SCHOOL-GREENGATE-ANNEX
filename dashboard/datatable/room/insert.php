<?php
require_once('../class.function.php');
$account = new DTFunction(); 
if(isset($_POST["operation"]))
{

	if($_POST["operation"] == "submit_room")
	{	
		try
		{
			$teacher_ID = $_POST["teacher_ID"];
			$section_ID = $_POST["teacher_section"];
			$semester_ID = $_POST["teacher_semester"];

			$q = "SELECT * FROM `ref_semester` WHERE sem_ID = ".$semester_ID.";";
			$s1 = $account->runQuery($q);
			$s1->execute();
			$r1 = $s1->fetchAll();
			foreach ($r1 as $rz){
				
				if ($rz["stat_ID"] == 0){
					$status_ID = 2;
				}
				else{
					$status_ID = 1;
				}
			}

			$sql = "INSERT INTO `room` 
			(`room_ID`,
			 `rid_ID`,
			  `section_ID`,
			   `sem_ID`,
			    `status_ID`) 
			    VALUES (
			    NULL,
			     :teacher_ID,
			      :section_ID,
			       :semester_ID,
			        :status_ID);";
				$statement = $account->runQuery($sql);
					
				$result = $statement->execute(
				array(

						':teacher_ID'		=>	$teacher_ID ,
						':section_ID'		=>	$section_ID ,
						':semester_ID'		=>	$semester_ID ,
						':status_ID'		=>	$status_ID ,

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

	if($_POST["operation"] == "submit_room_student")
	{
		
		
		

		echo $enrolled_ID = $_POST["enrolled_ID"];
		echo $room_ID = $_POST["room_ID"];

		$sql = "INSERT INTO `room_enrolled_student` 
		(`res_ID`, `rse_ID`, `room_ID`) 
		VALUES (NULL, :enrolled_ID, :room_ID);";
		$statement = $account->runQuery($sql);
			
		$result = $statement->execute(
		array(
				':enrolled_ID'	=>	$enrolled_ID,
				':room_ID'		=>	$room_ID ,
			)
		);
		if(!empty($result))
		{
			echo 'Successfully Added';
		}
	
	}
	if($_POST["operation"] == "submit_room_subject")
	{
		
		
		

		echo $acadsub_ID = $_POST["acadsub_ID"];
		echo $room_ID = $_POST["room_ID"];

		$sql = "INSERT INTO `room_subject` 
		(`rsub_ID`, `room_ID`, `acs_ID`)
		VALUES (NULL,  :room_ID,:acadsub_ID);";
		$statement = $account->runQuery($sql);
			
		$result = $statement->execute(
		array(
				':acadsub_ID'	=>	$acadsub_ID,
				':room_ID'		=>	$room_ID ,
			)
		);
		if(!empty($result))
		{
			echo 'Successfully Added';
		}
	
	}
	

	if($_POST["operation"] == "delete_room")
	{
		$statement = $account->runQuery(
			"DELETE FROM `room` WHERE `room_ID` = :room_ID"
		);
		$result = $statement->execute(
			array(
				':room_ID'	=>	$_POST["room_ID"]
			)
		);
		
		if(!empty($result))
		{
			echo 'Successfully Deleted';
		}
		
	
	}
}
?>

