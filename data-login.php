<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit-student'])) {
		if (empty($_POST['username']) || empty($_POST['password'])) 
			{
				echo "<script>alert('Student Number or Password is empty !');
										window.location='index.php';
									</script>";
				// Change this to bootstrap alert
			
			}
		else
		{
			login();
			
		}
}
if (isset($_POST['submit-parent'])) {
		if (empty($_POST['username']) || empty($_POST['password'])) 
			{
				echo "<script>alert('Username or Password is empty !');
					window.location='index.php';
				</script>";
				// Change this to bootstrap alert
			
			}
		
		else
		{
			login();
		}
}
if (isset($_POST['submit-staff'])) {
		if (empty($_POST['username']) || empty($_POST['password'])) 
			{
				echo "<script>alert('Username or Password is empty !');
					window.location='index.php';
				</script>";
				// Change this to bootstrap alert
			
			}
		
		else
		{
			login();
		}
}
include('data-md5.php');
function login(){

			include('dbconfig.php');
			// Define $username and $password
			$username=$_POST['username'];
			$password=$_POST['password'];
			// To protect MySQL injection for Security purpose
			$username = stripslashes($username);
			$password = stripslashes($password);
			$username = mysqli_real_escape_string($con,$username);
			$password = mysqli_real_escape_string($con,$password);
			
			
 			$input = "$password";
			$encrypted = encryptIt($input);
			// SQL query to fetch information of registerd users and finds user match.
			$query = mysqli_query($con,"SELECT * FROM `user_account` WHERE `user_Name` = '$username' AND `user_Pass` = '$encrypted'");
			$rows = mysqli_fetch_assoc($query);

			if ($rows['user_level']) 
			{
				$_SESSION['login_user']=$username; // Initializing Session
				header("location: dashboard.php"); //go to dashboard
			} 
			else 
			{
				echo "<script>swal('Good job!', 'You clicked the button!', 'success');
									window.location='index.php';
								</script>";
								// Change this to bootstrap alert
			}
			if ($rows['user_status'] == 'unregister') {
				echo "<script>alert.render('');
									window.location='index.php';
								</script>";
				include('alert/danger.php');
									
			}
			mysqli_close($con); // Closing Connection
}




?>