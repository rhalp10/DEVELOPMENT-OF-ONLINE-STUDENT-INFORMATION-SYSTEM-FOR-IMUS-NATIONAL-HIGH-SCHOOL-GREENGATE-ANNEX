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

	if($_POST["operation"] == "section_edit")
	{
		
		

		$section_title = $_POST["section_title"];

		$sql = "UPDATE `ref_section` SET `section_Name` = :section_title WHERE `ref_section`.`section_ID` =  :section_ID;";
		$statement = $account->runQuery($sql);
			
		$result = $statement->execute(
		array(
				':section_ID'	=>	$_POST["section_ID"],
				':section_title'		=>	$section_title ,
			)
		);
		if(!empty($result))
		{
			echo 'Successfully Updated';
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

