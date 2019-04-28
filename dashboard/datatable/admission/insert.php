<?php
include('../db.php');
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
	if($_POST["operation"] == "confirm")
	{
		print_r($_POST);
	}
}
if (isset($_POST["adconfirm_ID"])) {
	$adconfirm_ID = $_POST["adconfirm_ID"];
	 $sql = "UPDATE `admission` SET `admission_Status` = '1' WHERE `admission`.`admission_ID` = :id;";
	$statement = $conn->prepare($sql);
		
	$result = $statement->execute(
			array(
			':id'		=>	$adconfirm_ID
			)
		);
	if(!empty($result))
	{

		$sql = "SELECT admission_Email FROM `admission` WHERE admission_ID = :id";
		$statement = $conn->prepare($sql);
		$result = $statement->execute(
			array(
			':id'		=>	$adconfirm_ID
			)
		);
		$result = $statement->fetchAll();
		foreach($result as $row)
		{
			$admission_Email = $row["admission_Email"];
		}

		if(!empty($result))
		{
			$to = "$admission_Email";
			$subject = "Your Enrollment Registration Approve";

			$message = "
			<html>
			<head>
			<title>Your Enrollment Registration Approve</title>
			</head>
			<body>
			<h4>Kindly pass the required documents</h4>
			<h2>REQUIREMENTS</h2>
			<h3>(Grade and Transferees)</h3>
			<ul>
				<li> Report Card</li>
				<li> Photocopy of Birth Certificate</li>
				<li> 3 pcs 1x1 ID Picture</li>
				<li> Good Moral Certificate</li>
				<li> Barangay Clearance</li>
				<li> Brown Envelope (Long)</li>
				<li> Financial Assessment (from private school)</li>
			</ul>
			
			<a href='http://localhost/GreenAnnex%20Monitoring/index?page=admission-files&admission_ID=$adconfirm_ID'>UPLOAD SCAN DOCUMENT HERE</a>
			</body>
			</html>
			";

			// Always set content-type when sending HTML email
			$headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

			// More headers
			$headers .= 'From: <greengateannex@gmail.com>' . "\r\n";
			// $headers .= 'Cc: myboss@example.com' . "\r\n";

			mail($to,$subject,$message,$headers);
			
		}
		
	}

	
}
?>
