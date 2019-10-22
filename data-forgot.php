<?php
/**
 * @package    
 *
 * @copyright  Copyright (C) 2019, All rights reserved.
 * @license    MIT License version or later; see licensing/LICENSE.txt
 */

session_start(); // Starting Session

require_once("class.user.php");

	
$auth_user = new USER();
if (isset($_POST['operation'])) {
	if ($_POST['operation'] == "submit_forgot") {



		$forgot_user = strip_tags($_POST['forgot_user']);

		$forgot_email = strip_tags($_POST['forgot_email']);
			
		
		
		$auth_user->check_forgot($forgot_user,$forgot_email);

		
		
		
	}

}




?>