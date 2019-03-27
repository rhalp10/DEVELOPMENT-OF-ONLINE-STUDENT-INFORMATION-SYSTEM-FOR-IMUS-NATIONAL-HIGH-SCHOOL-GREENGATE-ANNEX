<?php
include('db.php');
include('function.php');
if(isset($_POST["operation"]))
{

	if($_POST["operation"] == "Add")
	{
		
		$EmpID = $_POST["EmpID"];
		$fname = $_POST["fname"];
		$mname = $_POST["mname"];
		$lname = $_POST["lname"];
		$suffix = $_POST["suffix"];
		$sex = $_POST["sex"];
		

		
		$sql = "SELECT * FROM `record_teacher_detail` WHERE `rtd_EmpID`= :EmpID;";
		$statement = $conn->prepare($sql);
		$statement->bindParam(':EmpID', $EmpID, PDO::PARAM_STR);
		$result = $statement->execute();
		$resultrows = $statement->rowCount();

		if (empty($resultrows)) { 
		   // if username is available

			$sql = "INSERT INTO `record_teacher_detail` (`rtd_ID`, `rtd_EmpID`, `rtd_FName`, `rtd_MName`, `rtd_LName`, `suffix_ID`, `sex_ID`) VALUES (NULL,:EmpID ,:fname ,:mname , :lname, :suffix, :sex);";
			$statement = $conn->prepare($sql);
			
			$result = $statement->execute(
				array(
					':EmpID'		=>	$EmpID ,
					':fname'		=>	$fname ,
					':mname'	 	=>	$mname ,
					':lname'	  	=>	$lname ,
					':suffix'	 	=>	$suffix,
					':sex'	 		=>	$sex,
				)
			);

			if(!empty($result))
			{
				echo 'Successfully Teacher Added';
			}

		} else {
		   // if username is not available
			echo 'Employee is Already Use';

		}

	
	}

	if($_POST["operation"] == "Edit")
	{
		
		$rtd_ID = $_POST["rtd_ID"];
		
		$EmpID = $_POST["EmpID"];
		$fname = $_POST["fname"];
		$mname = $_POST["mname"];
		$lname = $_POST["lname"];
		$suffix = $_POST["suffix"];
		$sex = $_POST["sex"];
		
		echo $sql ="UPDATE `record_teacher_detail` SET `rtd_EmpID` = :EmpID,`rtd_FName` = :fname,`rtd_MName` = :mname,`rtd_LName` = :lname,`suffix_ID` = :suffix,`sex_ID` = :sex   WHERE `record_teacher_detail`.`rtd_ID` = :rtd_ID;";
		
		$statement = $conn->prepare($sql);
		
		$result = $statement->execute(
				array(
					':rtd_ID'		=>	$rtd_ID ,
					':EmpID'		=>	$EmpID ,
					':fname'		=>	$fname ,
					':mname'	 	=>	$mname ,
					':lname'	  	=>	$lname ,
					':suffix'	 	=>	$suffix,
					':sex'	 		=>	$sex,
				)
			);
		if(!empty($result))
		{
			echo 'Data Updated';
		}
	}
}
print_r($_POST);
?>
