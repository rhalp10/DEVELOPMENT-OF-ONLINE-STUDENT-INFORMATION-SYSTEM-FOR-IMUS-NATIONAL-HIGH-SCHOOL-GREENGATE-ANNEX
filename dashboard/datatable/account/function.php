<?php
include('../../../data-md5.php');

function get_total_all_records()
{
	include('../db.php');
	$statement = $conn->prepare("SELECT * FROM `user_accounts`");
	$statement->execute();
	$result = $statement->fetchAll();
	return $statement->rowCount();
}



function check_user_level($var)
{
	include('../db.php');
	$statement = $conn->prepare("SELECT * FROM `ref_user_level` WHERE ulevel_ID = $var");
	$statement->execute();
	$result = $statement->fetchAll();
	foreach($result as $row)
	{
		$level_name = $row["ulevel_Name"];
	}
	return $level_name;
}

function check_status_level($var)
{
	
	if ($var == 1) {
	$user_status = '<span class="label label-success">Active</span>';
	}
	else if ($var == 2) {
	$user_status = '<span class="label label-danger">Ban</span>';
	}
	else if ($var == 0){
		$user_status = '<span class="label label-warning">Deactivated</span>';
	}
	else{
		$user_status = '<span class="label label-danger">Error</span>';
	}
	return $user_status;

}


?>