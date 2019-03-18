<?php
/**
 * @package    DEVELOPMENT IF ONLINE STUDENT INFORMATION SYSTEM FOR IMUS NATIONAL HIGH SCHOOL - GREENGATE ANNEX
 *
 * @copyright  Copyright (C) 2019, All rights reserved.
 * @license    MIT License version or later; see licensing/LICENSE.txt
 */
include('dbconfig.php');
include('data-md5.php');
function success(){
		echo "<script>alert('Successfully Register');
											window.location='index.php';
										</script>";
}
function notallowed(){
		
	echo "<script>alert('You are not allowed to register');
											window.location='index.php';
										</script>";
}
function notmatch(){
	echo "<script>alert('Password Not match');
											window.location='index.php';
										</script>";
}

function stripslash_mrst($con,$var){
	$var = stripslashes($var);
	$stripslash_mrst = mysqli_real_escape_string($con,$var);
	return $stripslash_mrst;
}

if (isset($_POST['register-student'])) {
		$lrn_number = $_POST['lrn_number'];
		$password = $_POST['password'];
		$re_password = $_POST['re_password'];
		$email = $_POST['email'];

		$lrn_number = stripslash_mrst($con,$lrn_number);
		$password = stripslash_mrst($con,$password);
		$re_password = stripslash_mrst($con,$re_password);
		$email = stripslash_mrst($con,$email);

		if ($password == $re_password)
		{
			$sql ="SELECT * FROM";
		    $sql.=" `record_student_details` WHERE `rsd_LRN` = '$lrn_number' ";
		    $result = mysqli_query($con,$sql) or die(mysqli_error());
		    $res = mysqli_fetch_array($result);
			$res['rsd_LRN'];
			// if student has record perform add query
			if ($lrn_number == $res['rsd_LRN'])  
			{
				$input = "$password";
				$encrypted = encryptIt($input);
				$result = mysqli_query($con,"INSERT INTO `user_accounts` (ulevel_ID, user_Name, user_Pass,user_Email) VALUES ('2','$lrn_number','$encrypted','$email')");
				// geting the last insert created account
				$last_id = mysqli_insert_id($con);
				//update of the student info as register
				$result1 = mysqli_query($con,"UPDATE `record_student_details` SET `user_status` = '1',`user_ID` = '$last_id' WHERE `rsd_LRN` = '$lrn_number'");
				success();
			
			}
			else
			{
				notallowed();
				
			}
		}
		else{
			notmatch();
		}
}

if (isset($_POST['register-admin'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];
		$re_password = $_POST['re_password'];
		$email = $_POST['email'];

		$username = stripslash_mrst($con,$username);
		$password = stripslash_mrst($con,$password);
		$re_password = stripslash_mrst($con,$re_password);
		$email = stripslash_mrst($con,$email);

		if ($password == $re_password)
		{
			$input = "$password";
			$encrypted = encryptIt($input);
			$result = mysqli_query($con,"INSERT INTO `user_accounts` (ulevel_ID, user_Name, user_Pass,user_Email) VALUES ('1','$username','$encrypted','$email')");
			success();
		}
		else{
			notmatch();
		}
}
		

?>