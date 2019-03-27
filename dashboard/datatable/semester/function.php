<?php
include('../../../data-md5.php');

function get_total_all_records()
{
	include('db.php');
	$statement = $conn->prepare("SELECT * FROM `ref_semester`");
	$statement->execute();
	$result = $statement->fetchAll();
	return $statement->rowCount();
}

function check_status($var)
{
	
	if ($var == 1) {
	$user_status = '<span class="label label-success">Active</span>';
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