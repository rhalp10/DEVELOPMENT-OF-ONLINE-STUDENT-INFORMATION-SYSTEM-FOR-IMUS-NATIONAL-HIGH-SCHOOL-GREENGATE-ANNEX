<?php
include('db.php');
include('function.php');
if(isset($_POST["operation"]))
{

	if($_POST["operation"] == "Add")
	{
		
		$studentLRN = $_POST["studentLRN"];
		$parent_user = $_POST["parent_user"];
		$firstname = $_POST["firstname"];
		$middlename = $_POST["middlename"];
		$lastname = $_POST["lastname"];
		$suffix = $_POST["suffix"];
		$sex = $_POST["sex"];
		$contact = $_POST["contact"];
		$address = $_POST["address"];
			
		$sql = "SELECT * FROM `record_student_details` WHERE `rsd_LRN`= :studentLRN;";
		$statement = $conn->prepare($sql);
		$statement->bindParam(':studentLRN', $studentLRN, PDO::PARAM_STR);
		$result = $statement->execute();
		$resultrows = $statement->rowCount();

		if (empty($resultrows)) { 
		   //WRONG STUDENT LRNUMBER 
			echo 'Wrong LRN Number';
			

		} 
		else {
			// GET CHILD ID BASE OF LRN NUMBER
			$fetch = $statement->fetchAll();
			foreach($fetch as $row)
			{
				$child_ID = $row["rsd_ID"];
			}
			// IF USER DOESNT HAVE ACCOUNT 
			if (empty($parent_user)) {

				$sql = "INSERT INTO `record_parent_details` (
					`parent_ID`,
					 `rsd_ID`,
					  `user_ID`,
					   `parent_FName`,
					    `parent_MName`,
					     `parent_LName`,
					      `suffix_ID`,
					       `sex_ID`,
					        `religion_ID`,
					         `parent_Contact`,
					          `parent_Address`) 
					          VALUES (
					          NULL,
					           :child_ID,
					            NULL,
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
							':child_ID'			=> $child_ID,
							':firstname' 		=> $firstname,
							':middlename' 		=> $middlename,
							':lastname' 		=> $lastname,
							':suffix' 			=> $suffix,
							':sex' 				=> $sex,
							':contact' 			=> $contact,
							':address' 			=> $address
						)
					);

					if(!empty($result))
					{
						echo 'Successfully Parent Added';
					}
				
			}
			// IF USER HAVE ACCOUNT 
			else{
				$sql = "SELECT * FROM `user_accounts` WHERE `user_Name`= :parent_user;";
				$statement = $conn->prepare($sql);
				$statement->bindParam(':parent_user', $parent_user, PDO::PARAM_STR);
				$result = $statement->execute();
				$resultrows = $statement->rowCount();

				if (empty($resultrows)) { 
					echo 'User Doesn\'t Exist';
				}
				else {
					// GET USER ID
					$fetch = $statement->fetchAll();
					foreach($fetch as $row)
					{
						$parent_userID = $row["user_ID"];
					}

					$sql = "INSERT INTO `record_parent_details` (
					`parent_ID`,
					 `rsd_ID`,
					  `user_ID`,
					   `parent_FName`,
					    `parent_MName`,
					     `parent_LName`,
					      `suffix_ID`,
					       `sex_ID`,
					        `religion_ID`,
					         `parent_Contact`,
					          `parent_Address`) 
					          VALUES (
					          NULL,
					           :child_ID,
					            :parent_userID,
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
							':child_ID'			=> $child_ID,
							':parent_userID' 	=> $parent_userID,
							':firstname' 		=> $firstname,
							':middlename' 		=> $middlename,
							':lastname' 		=> $lastname,
							':suffix' 			=> $suffix,
							':sex' 				=> $sex,
							':contact' 			=> $contact,
							':address' 			=> $address
						)
					);

					if(!empty($result))
					{
						echo 'Successfully Parent Added';
					}

				}

			}
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
