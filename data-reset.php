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
	if ($_POST['operation'] == "submit_resetpass") {

		$output = array();

		$user_ID = strip_tags($_POST['user_ID']);
		$reset_pass = strip_tags($_POST['reset_pass']);
		$reset_cpass = strip_tags($_POST['reset_cpass']);
		

		if($reset_pass === $reset_cpass)
		{
			$stmt = $auth_user->runQuery("SELECT * FROM `user_account` WHERE user_ID =  :user_ID 
			LIMIT 1");
			$stmt->execute(array(':user_ID'=>$user_ID));
			$userRow=$stmt->fetch(PDO::FETCH_ASSOC);
			if($stmt->rowCount() == 1)
			{
				
				$user_Reset = $userRow['user_Reset'];
				if($user_Reset === 0 || $user_Reset < 1)
				{
					$output['error'] = "Password Change Limit Reach";
				}
				else
				{
					$user_Reset--;
		
					$new_password = password_hash($reset_cpass, PASSWORD_DEFAULT);
						
					$stmt = $auth_user->runQuery("UPDATE `user_account` 
							SET
							`user_Pass` = :user_Pass ,
							`user_Reset` = :user_Reset 
							WHERE `user_account`.`user_ID` = :user_ID");
					$stmt->bindparam(":user_ID", $user_ID);	
					$stmt->bindparam(":user_Pass", $new_password);
					$stmt->bindparam(":user_Reset", $user_Reset);
					$stmt->execute();	

					$output['success'] = "Password successfully change";
				
				}

			

			}
		}
		else
		{
			$output['error'] =  "Password not match";
		}

		
		
		
echo json_encode($output,true);
	}

}




?>