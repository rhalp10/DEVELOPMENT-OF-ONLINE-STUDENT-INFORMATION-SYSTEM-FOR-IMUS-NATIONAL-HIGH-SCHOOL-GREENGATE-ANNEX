<?php
	require_once('session.php');
	require_once('classes/user.php');

	$user_logout = new USER();
	
	if($user_logout->is_loggedin()!="")
	{
		$user_logout->redirect('index');
	}
	if(isset($_GET['logout']) && $_GET['logout']=="true")
	{
		$user_logout->doLogout();
		$user_logout->redirect('index');
	}


