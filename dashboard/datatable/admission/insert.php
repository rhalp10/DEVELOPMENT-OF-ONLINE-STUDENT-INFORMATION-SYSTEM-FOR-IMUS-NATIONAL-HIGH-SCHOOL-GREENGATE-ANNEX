<?php
require_once('../class.function.php');
$admission = new DTFunction(); 
if(isset($_POST["operation"]))
{



	if($_POST["operation"] == "confirm_admission")
	{
		
		

		$admission_ID = $_POST["admission_ID"];

		$sql = "UPDATE `admission_student_details` SET `admission_Status` = '1' WHERE `admission_student_details`.`admission_ID` = :admission_ID;";
		$statement = $admission->runQuery($sql);
			
		$result = $statement->execute(
		array(
				':admission_ID'	=>	$_POST["admission_ID"],
			)
		);
		if(!empty($result))
		{

			$sql = "SELECT admission_Email FROM `admission_student_details` WHERE admission_ID = :id";
			$statement = $conn->prepare($sql);
			$result = $statement->execute(
				array(
				':id'		=>	$admission_ID
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
				
				<a href='http://localhost/GreenAnnex%20New/index?page=admission-files&admission_ID=$adconfirm_ID'>UPLOAD SCAN DOCUMENT HERE</a>
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
			echo 'Successfully Confirm & Sent Email';
		}
	
	}

	if($_POST["operation"] == "delete_Admission")
	{
		$statement = $admission->runQuery(
			"DELETE FROM `admission_student_details` WHERE `admission_ID` = :admission_ID"
		);
		$result = $statement->execute(
			array(
				':admission_ID'	=>	$_POST["admission_ID"]
			)
		);
		
		if(!empty($result))
		{
			echo 'Successfully Deleted';
		}
		
	
	}
}

?>

