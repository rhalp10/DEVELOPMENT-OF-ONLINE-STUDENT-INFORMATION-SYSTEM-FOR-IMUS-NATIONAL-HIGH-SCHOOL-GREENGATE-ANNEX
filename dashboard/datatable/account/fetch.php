<?php
include('db.php');
include('function.php');
$query = '';
$output = array();
$query .= "SELECT * FROM `user_accounts`";
if(isset($_POST["search"]["value"]))
{
	$query .= 'WHERE user_Name LIKE "%'.$_POST["search"]["value"].'%" ';
	$query .= 'OR user_Email LIKE "%'.$_POST["search"]["value"].'%" ';
}
if(isset($_POST["order"]))
{
	$query .= 'ORDER BY '.$_POST['order']['0']['column'].' '.$_POST['order']['0']['dir'].' ';
}
else
{
	$query .= 'ORDER BY user_ID DESC ';
}
if($_POST["length"] != -1)
{
	$query .= 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}
$statement = $conn->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
$data = array();
$filtered_rows = $statement->rowCount();
foreach($result as $row)
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
$output = array(
	"draw"				=>	intval($_POST["draw"]),
	"recordsTotal"		=> 	$filtered_rows,
	"recordsFiltered"	=>	get_total_all_records(),
	"data"				=>	$data
);
echo json_encode($output);

?>



        
