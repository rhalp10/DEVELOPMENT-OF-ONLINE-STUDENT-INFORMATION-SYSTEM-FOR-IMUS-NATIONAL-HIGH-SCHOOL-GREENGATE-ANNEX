<?php
include('db.php');
include('function.php');
if(isset($_POST["operation"]))
{

	if($_POST["operation"] == "Add")
	{
		
		$lrn = $_POST["lrn"];
		$fname = $_POST["fname"];
		$mname = $_POST["mname"];
		$lname = $_POST["lname"];
		$suffix = $_POST["suffix"];
		$sex = $_POST["sex"];
		

		
		$sql = "SELECT * FROM `record_student_details` WHERE `rsd_StudNum`= :lrn;";
		$statement = $conn->prepare($sql);
		$statement->bindParam(':lrn', $lrn, PDO::PARAM_STR);
		$result = $statement->execute();
		$resultrows = $statement->rowCount();

		if (empty($resultrows)) { 
		   // if username is available

			$sql = "INSERT INTO `record_student_details` (`rsd_ID`, `user_ID`, `rsd_StudNum`, `rsd_FName`, `rsd_MName`, `rsd_LName`, `suffix_ID`, `sex_ID`) VALUES (NULL, NULL,:lrn ,:fname ,:mname,:lname , :suffix, :sex);";
			$statement = $conn->prepare($sql);
			
			$result = $statement->execute(
				array(
					':lrn'		=>	$lrn,
					':fname'	=>	$fname,
					':mname'	=>	$mname,
					':lname' 	=>	$lname,
					':suffix'	=>	$suffix,
					':sex'	=>	$sex
				)
			);

			if(!empty($result))
			{
				echo 'Successfully Student Added';
			}

		} else {
		   // if username is not available
			echo 'LRN is Already Use';

		}

	
	}

	if($_POST["operation"] == "Edit")
	{
		
		$rsd_ID = $_POST["rsd_ID"];
		
		$lrn = $_POST["lrn"];
		$fname = $_POST["fname"];
		$mname = $_POST["mname"];
		$lname = $_POST["lname"];
		$suffix = $_POST["suffix"];
		$sex = $_POST["sex"];
		
		 $sql ="UPDATE `record_student_details` 
		SET 
		`rsd_StudNum` = :lrn,
		`rsd_FName` = :fname,
		`rsd_MName` = :mname,
		`rsd_LName` = :lname,
		`suffix_ID` = :suffix,
		`sex_ID` = :sex
		WHERE `record_student_details`.`rsd_ID` = :rsd_ID;";
		
		$statement = $conn->prepare($sql);
		
		$result = $statement->execute(
				array(
					':rsd_ID'	=>	$rsd_ID,
					':lrn'		=>	$lrn,
					':fname'	=>	$fname,
					':mname'	=>	$mname,
					':lname' 	=>	$lname,
					':suffix'	=>	$suffix,
					':sex'		=>	$sex
					
				)
			);
		if(!empty($result))
		{
			echo 'Data Updated';
		}
	}
}
?>
