<?php
//fetch.php
// $connect = mysqli_connect("localhost", "root", "", "greengate_annex");
include('../../../dbconfig.php');
include('function.php');
$column = array("ua.user_ID", "ua.user_Name","rul.ulevel_Name ");


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
$query = "SELECT * FROM `user_accounts` `ua`
LEFT JOIN `ref_user_level` `rul` ON `rul`.`ulevel_ID` = `ua`.`ulevel_ID`
";
$query .= " WHERE  ";
if(isset($_POST["is_category"]))
{
 
	$query .= "ua.ulevel_ID = '".$_POST["is_category"]."'  AND ";
}
if(isset($_POST["search"]["value"]))
{
 $query .= '(user_Name LIKE "%'.$_POST["search"]["value"].'%" ';
	$query .= 'OR user_Email LIKE "%'.$_POST["search"]["value"].'%" ';
	$query .= 'OR ulevel_Name LIKE "%'.$_POST["search"]["value"].'%") ';
}

if(isset($_POST["order"]))
{
 $query .= 'ORDER BY '.$column[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' ';
}
else
{
 $query .= 'ORDER BY ua.user_ID DESC ';
}

$query1 = '';

if($_POST["length"] != 1)
{
 $query1 .= 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}

$number_filter_row = mysqli_num_rows(mysqli_query($con, $query));

$result = mysqli_query($con, $query . $query1);

$data = array();

while($row = mysqli_fetch_array($result))
{
	$user_level = check_user_level($row["ulevel_ID"]);
	$user_status = check_status_level($row["user_status"]);
	$sub_array = array();
	$sub_array[] = $row["user_ID"];
	$sub_array[] = $user_level;
	$sub_array[] = $row["user_Name"];
	$sub_array[] = $user_status;
	$sub_array[] = $row["user_Registered"];
	$sub_array[] = '<td class="text-center"><div class="btn-group"><button type="button" class="btn btn-primary btn-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="icon-gear"></i> &nbsp;<span class="caret"></span></button><ul class="dropdown-menu dropdown-menu-right"><li><a href="#"  id="'.$row["user_ID"].'"  class="update"><i class="icon-pencil7"></i> Update</a></li></ul></div></td>';
	// $sub_array[] = '<button type="button" name="delete" id="'.$row["id"].'" class="btn btn-danger btn-xs delete">Delete</button>';
	$data[] = $sub_array;
}

function get_all_data($con)
{
 $query = "SELECT * FROM teacher_subject_assign";
 $result = mysqli_query($con, $query);
 return mysqli_num_rows($result);
}

$output = array(
 "draw"    => intval($_POST["draw"]),
 "recordsTotal"  =>  get_all_data($con),
 "recordsFiltered" => $number_filter_row,
 "data"    => $data
);

echo json_encode($output);

?>