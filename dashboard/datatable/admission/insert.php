<?php
include('db.php');
include('function.php');
if(isset($_POST["operation"]))
{

	if($_POST["operation"] == "Add")
	{
		$fname = $_POST['fname'];
		$mname = $_POST['mname'];
		$lname = $_POST['lname'];
		$schl = $_POST['schl'];
		$bday = $_POST['bday'];
		$mobilenum = $_POST['mobilenum'];
		$gender = $_POST['gender'];
		$citizenship = $_POST['citizenship'];
		$email = $_POST['email'];
		$admission_Status = $_POST['admission_Status'];
		$sql = "INSERT INTO `admission` (`admission_ID`, `admission_FName`, `admission_MName`, `admission_LName`, `admission_LSch`, `admission_Bday`, `admission_MNum`, `sex_ID`, `admission_Ctzen`,`admission_Date`,`admission_Email`,`admission_Status`) VALUES (NULL, :fname,
		 :mname,
		  :lname,
		   :schl,
		    :bday,
		     :mobilenum,
		      :gender,
		       :citizenship,
		       CURRENT_TIMESTAMP,
		   		:email,
		   		 :admission_Status);";
		$statement = $conn->prepare($sql);
		
		$result = $statement->execute(
			array(
				':fname'			=>	$fname,
				':mname'			=>	$mname,
				':lname'			=>	$lname,
				':schl'				=>	$schl,
				':bday'				=>	$bday,
				':mobilenum'		=>	$mobilenum,
				':gender'			=>	$gender,
				':citizenship'		=>	$citizenship,
				':email'		=>	$email,
				':admission_Status'		=>	$admission_Status
			)
		);

		if(!empty($result))
		{
			echo 'Successfully Section Added';
		}
	}

	if($_POST["operation"] == "Edit")
	{
		
		$admission_ID = $_POST["admission_ID"];
		$fname = $_POST['fname'];
		$mname = $_POST['mname'];
		$lname = $_POST['lname'];
		$schl = $_POST['schl'];
		$bday = $_POST['bday'];
		$mobilenum = $_POST['mobilenum'];
		$gender = $_POST['gender'];
		$citizenship = $_POST['citizenship'];
		$email = $_POST['email'];
		$admission_Status = $_POST['admission_Status'];
		 $sql ="UPDATE `admission` 
		SET 
		`admission_ID` 		= :admission_ID,
		 `admission_FName` 	= :fname ,
		 `admission_MName` 	= :mname ,
		 `admission_LName` 	= :lname ,
		 `admission_LSch` 	= :schl ,
		 `admission_Bday` 	= :bday ,
		 `admission_MNum` 	= :mobilenum ,
		 `sex_ID` 			= :gender ,
		 `admission_Ctzen` 	= :citizenship ,
		 `admission_Status` 	= :admission_Status 
		 WHERE `admission`.`admission_ID` = :admission_ID;";
		
		$statement = $conn->prepare($sql);
		
		$result = $statement->execute(
				array(
				':admission_ID'		=>	$admission_ID,
				':fname'			=>	$fname,
				':mname'			=>	$mname,
				':lname'			=>	$lname,
				':schl'				=>	$schl,
				':bday'				=>	$bday,
				':mobilenum'		=>	$mobilenum,
				':gender'			=>	$gender,
				':citizenship'		=>	$citizenship,
				':admission_Status'		=>	$admission_Status
				)
			);
		if(!empty($result))
		{
			echo 'Data Updated';
		}
	}
}
?>
