<?php
include('../db.php');
include('function.php');
$query = '';
$output = array();
$query .= "SELECT * FROM `acad_staff`";

// if(isset($_POST["search"]["value"]))
// {
// 	$query .= 'WHERE name LIKE "%'.$_POST["search"]["value"].'%" ';
// 	$query .= 'OR position LIKE "%'.$_POST["search"]["value"].'%" ';
// }
if (isset($_POST["subject_ID"])) {
	$query .= 'WHERE `subject_ID`  =  "'.$_POST["subject_ID"].'" ';
}
if(isset($_POST["order"]))
{
	$query .= 'ORDER BY '.$_POST['order']['0']['column'].' '.$_POST['order']['0']['dir'].' ';
}
else
{
	$query .= 'ORDER BY acs_ID ASC ';
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
	

	$sub_array = array();
	$sub_array[] = $row["acs_ID"];
	$sub_array[] = $row["name"];
	$sub_array[] = $row["position"];
	$sub_array[] = '<td class="text-center"><div class="btn-group"><button type="button" class="btn btn-primary btn-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="icon-gear"></i> &nbsp;<span class="caret"></span></button><ul class="dropdown-menu dropdown-menu-right"><li><a href="#"  id="'.$row["acs_ID"].'"  class="update_acs">Update</a></li><li><a href="#"  id="'.$row["acs_ID"].'"  class="delete_acs">Remove</a></li></ul></div></td>';
	// $sub_array[] = '<button type="button" name="delete" id="'.$row["id"].'" class="btn btn-danger btn-xs delete_sub">Delete</button>';
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



        
