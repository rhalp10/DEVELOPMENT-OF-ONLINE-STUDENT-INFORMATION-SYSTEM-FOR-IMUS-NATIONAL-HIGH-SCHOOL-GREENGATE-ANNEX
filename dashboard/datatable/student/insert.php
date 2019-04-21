<?php
include('../db.php');
include('function.php');
if(isset($_POST["operation"]))
{

	if ($_POST["operation"] == "GetAdmissionDetail") {

		$admission_ID = $_POST["admission_ID"];
		$output = array();
		$sql = "SELECT * FROM `admission` WHERE admission_ID = :admission_ID;";
			$statement = $conn->prepare($sql);
			
			$result = $statement->execute(
				array(
					':admission_ID'	=>	$admission_ID
				)
			);
			$fetch = $statement->fetchAll();
			foreach($fetch as $row)
			{
				$output["admission_Name"] = $row["admission_Name"];
				$output["sex_ID"] = $row["sex_ID"];
				$output["admission_contact"] = $row["admission_contact"];
				$output["admission_address"] = $row["admission_address"];
				
				
			}

			if(!empty($result))
			{
				echo json_encode($output);
			}
			
	}
	if($_POST["operation"] == "Add")
	{
		
		
		$studentID = $_POST["studentID"];
		$firstname = $_POST["firstname"];
		$middlename = $_POST["middlename"];
		$lastname = $_POST["lastname"];
		$suffix = $_POST["suffix"];
		$sex = $_POST["sex"];
		$contact = $_POST["contact"];
		$address = $_POST["address"];
		

		
		$sql = "SELECT * FROM `record_student_details` WHERE `rsd_LRN`= :studentID;";
		$statement = $conn->prepare($sql);
		$statement->bindParam(':studentID', $studentID, PDO::PARAM_STR);
		$result = $statement->execute();
		$resultrows = $statement->rowCount();

		if (empty($resultrows)) { 
		   // if username is available

			$sql = "INSERT INTO `record_student_details` (`rsd_ID`, `user_ID`, `rsd_LRN`, `rsd_FName`, `rsd_MName`, `rsd_LName`, `suffix_ID`, `sex_ID`, `religion_ID`, `rsd_Contact`, `rsd_Address`, `ethnic_ID`) VALUES (NULL, NULL, :studentID, :firstname, :middlename, :lastname, :suffix, :sex, NULL, :contact, :address, NULL);";
			$statement = $conn->prepare($sql);
			
			$result = $statement->execute(
				array(
					':studentID'	=>	$studentID,
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
		
		$studentID = $_POST["studentID"];
		$firstname = $_POST["firstname"];
		$middlename = $_POST["middlename"];
		$lastname = $_POST["lastname"];
		$suffix = $_POST["suffix"];
		$sex = $_POST["sex"];
		$contact = $_POST["contact"];
		$address = $_POST["address"];
		$sql = "SELECT * FROM `record_student_details` WHERE `rsd_LRN`= :studentID;";
		$statement = $conn->prepare($sql);
		$statement->bindParam(':studentID', $studentID, PDO::PARAM_STR);
		$result = $statement->execute();
		$resultrows = $statement->rowCount();
 
		if (empty($resultrows)) {
		
			$sql ="UPDATE `record_student_details` SET `rsd_FName` = :x_firstname,`rsd_LRN` = :x_studentID,`rsd_FName` = :x_firstname,`rsd_MName` = :x_middlename, `rsd_LName` = :x_lastname,`suffix_ID` = :x_suffix,`sex_ID` = :x_sex,`rsd_Contact` = :x_contact,`rsd_Address` = :x_address  WHERE `record_student_details`.`rsd_ID` = :x_rsd_ID;";
			
			$statement = $conn->prepare($sql);
			
			$result = $statement->execute(
					array(
						':x_rsd_ID'			=>	$rsd_ID,
						':x_studentID'		=>	$studentID,
						':x_firstname' 		=> $firstname,
						':x_middlename' 	=> $middlename,
						':x_lastname' 		=> $lastname,
						':x_suffix' 		=> $suffix,
						':x_sex' 			=> $sex,
						':x_contact' 		=> $contact,
						':x_address' 		=> $address
						
					)
				);
			if(!empty($result))
			{
				echo 'Data Updated';
			}
		}
		else {

			$fetch = $statement->fetchAll();
			foreach($fetch as $row)
			{
				$chk_ID = $row["rsd_ID"];
				$chk_StudNum = $row["rsd_LRN"];
			}

			if ($chk_StudNum == $studentID AND $chk_ID  == $rsd_ID) 
			{
				$sql ="UPDATE `record_student_details` SET `rsd_FName` = :x_firstname,`rsd_LRN` = :x_studentID,`rsd_FName` = :x_firstname,`rsd_MName` = :x_middlename, `rsd_LName` = :x_lastname,`suffix_ID` = :x_suffix,`sex_ID` = :x_sex,`rsd_Contact` = :x_contact,`rsd_Address` = :x_address  WHERE `record_student_details`.`rsd_ID` = :x_rsd_ID;";
			
				$statement = $conn->prepare($sql);
				
				$result = $statement->execute(
						array(
							':x_rsd_ID'			=>	$rsd_ID,
							':x_studentID'		=>	$studentID,
							':x_firstname' 		=> $firstname,
							':x_middlename' 	=> $middlename,
							':x_lastname' 		=> $lastname,
							':x_suffix' 		=> $suffix,
							':x_sex' 			=> $sex,
							':x_contact' 		=> $contact,
							':x_address' 		=> $address
							
						)
					);
				if(!empty($result))
				{
					echo 'Data Updated';
				}
			}
			else{

				echo 'LRN  is Already Use';
			}

		}
	}
}
?>
