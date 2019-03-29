<?php
include('db.php');
include('function.php');
if(isset($_POST["operation"]))
{

	if($_POST["operation"] == "Add")
	{
		
		$teacherID = $_POST["teacherID"];
		$firstname = $_POST["firstname"];
		$middlename = $_POST["middlename"];
		$lastname = $_POST["lastname"];
		$suffix = $_POST["suffix"];
		$sex = $_POST["sex"];
		$contact = $_POST["contact"];
		$address = $_POST["address"];
			
		$sql = "SELECT * FROM `record_teacher_detail` WHERE `rtd_EmpID`= :teacherID;";
		$statement = $conn->prepare($sql);
		$statement->bindParam(':teacherID', $teacherID, PDO::PARAM_STR);
		$result = $statement->execute();
		$resultrows = $statement->rowCount();

		if (empty($resultrows)) { 
		   // if username is available

			$sql = "INSERT INTO `record_teacher_detail` (`rtd_ID`, `rtd_EmpID`, `rtd_FName`, `rtd_MName`, `rtd_LName`, `suffix_ID`, `sex_ID`, `religion_ID`, `rtd_Contact`, `rtd_Address`) VALUES (
			NULL,
			 :teacherID,
			  :firstname,
			   :middlename,
			    :lastname,
			     :suffix,
			      :sex,
			       NULL,
			        :contact,
			         :address);";
			$statement = $conn->prepare($sql);
			
			$result = $statement->execute(
				array(	
					':teacherID' 	=> $teacherID,
					':firstname' 	=> $firstname,
					':middlename' 	=> $middlename,
					':lastname' 	=> $lastname,
					':suffix' 		=> $suffix,
					':sex' 			=> $sex,
					':contact' 		=> $contact,
					':address' 		=> $address
				)
			);

			if(!empty($result))
			{
				echo 'Successfully Teacher Added';
			}

		} else {
		   // if username is not available
			echo 'Teacher ID is Already Use';

		}

	
	}

	if($_POST["operation"] == "Edit")
	{
		
		$rtd_ID = $_POST["rtd_ID"];
		
		$teacherID = $_POST["teacherID"];
		$firstname = $_POST["firstname"];
		$middlename = $_POST["middlename"];
		$lastname = $_POST["lastname"];
		$suffix = $_POST["suffix"];
		$sex = $_POST["sex"];
		$contact = $_POST["contact"];
		$address = $_POST["address"];
		
		echo $sql ="UPDATE `record_teacher_detail` 
		SET 
		`rtd_EmpID` = :teacherID,
		`rtd_FName` = :firstname,
		`rtd_MName` = :middlename,
		`rtd_LName` = :lastname,
		`suffix_ID` = :suffix,
		`sex_ID` = :sex,
		`rtd_Contact` = :contact,  
		`rtd_Address` = :address   
		WHERE `record_teacher_detail`.`rtd_ID` = :rtd_ID;";
		
		$statement = $conn->prepare($sql);
		
		$result = $statement->execute(
				array(
					':rtd_ID'		=>	$rtd_ID ,
					':teacherID' 	=> $teacherID,
					':firstname' 	=> $firstname,
					':middlename' 	=> $middlename,
					':lastname' 	=> $lastname,
					':suffix' 		=> $suffix,
					':sex' 			=> $sex,
					':contact' 		=> $contact,
					':address' 		=> $address
				)
			);
		if(!empty($result))
		{
			echo 'Data Updated';
		}
	}
}
print_r($_POST);
print_r($_REQUEST);
?>
