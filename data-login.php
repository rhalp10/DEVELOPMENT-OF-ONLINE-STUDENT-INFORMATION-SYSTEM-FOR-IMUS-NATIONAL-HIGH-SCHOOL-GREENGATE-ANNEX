<?php
/**
 * @package    DEVELOPMENT IF ONLINE STUDENT INFORMATION SYSTEM FOR IMUS NATIONAL HIGH SCHOOL - GREENGATE ANNEX
 *
 * @copyright  Copyright (C) 2019, All rights reserved.
 * @license    MIT License version or later; see licensing/LICENSE.txt
 */

session_start(); // Starting Session
print_r($_POST);
include('data-md5.php');
$error=''; // Variable To Store Error Message
function success(){
		echo "<script>alert('Successfully login');
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
function error_Sql(){
	echo "<script>alert('Sql Error');
											window.location='index.php';
										</script>";
}
function error_credential(){
	echo "<script>alert('Wrong Username or Password!');
											window.location='authentication.php';
										</script>";
}
if (isset($_POST['submit_student'])) {
		if (empty($_POST['username']) || empty($_POST['password'])) 
			{
				echo "<script>alert('Student Number or Password is empty !');
										window.location='index.php';
									</script>";
				// Change this to bootstrap alert
			
			}
		else
		{
			$lvl = 2;
			login($lvl);
			
		}
}
if (isset($_POST['submit_parent'])) {
		if (empty($_POST['username']) || empty($_POST['password'])) 
			{
				echo "<script>alert('Username or Password is empty !');
					window.location='index.php';
				</script>";
				// Change this to bootstrap alert
			
			}
		
		else
		{	
			$lvl = 3;
			login($lvl);
		}
}
if (isset($_POST['submit_staff'])) {
		if (empty($_POST['username']) || empty($_POST['password'])) 
			{
				echo "<script>alert('Username or Password is empty !');
					window.location='index.php';
				</script>";
				// Change this to bootstrap alert
			
			}
		
		else
		{
			$lvl = '1 OR ulevel_ID = 4';
			login($lvl);
		}
}
function login($lvl){

			include('dbconfig.php');
			// Define $username and $password
			echo $username=$_POST['username'];
			echo $password=$_POST['password'];
			// To protect MySQL injection for Security purpose
			echo $username = stripslashes($username);
			echo $password = stripslashes($password);
			echo $username = mysqli_real_escape_string($con,$username);
			echo $password = mysqli_real_escape_string($con,$password);
						
			
 			$input = "$password";
			echo $encrypted = encryptIt($input);
			// SQL query to fetch information of registerd users and finds user match.
			$query = mysqli_query($con,"SELECT * FROM `user_accounts` WHERE `user_Name` = '$username' AND `user_Pass` = '$encrypted' AND ulevel_ID = $lvl AND  user_status = 1");
			if (mysqli_num_rows($query) > 0) 
			{
				$rows = mysqli_fetch_assoc($query);
				// And error has occured while executing
			    if ($rows['ulevel_ID']) 
				{
					$_SESSION['login_user']=$username; // Initializing Session
					header("location: dashboard/"); //go to dashboard
					success();
				} 

			}
			else
			{
			 error_credential();
			}
			mysqli_close($con); // Closing Connection
}




?>