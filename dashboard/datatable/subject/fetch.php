<?php
include('../db.php');
include('function.php');
$query = '';
$output = array();
$query .= "SELECT * FROM `subject`";
if(isset($_POST["search"]["value"]))
{
	$query .= 'WHERE subject_ID LIKE "%'.$_POST["search"]["value"].'%" ';
	$query .= 'OR subject_code LIKE "%'.$_POST["search"]["value"].'%" ';
	$query .= 'OR subject_TItle LIKE "%'.$_POST["search"]["value"].'%" ';
	$query .= 'OR Abbreviation LIKE "%'.$_POST["search"]["value"].'%" ';
}
if(isset($_POST["order"]))
{
	$query .= 'ORDER BY '.$_POST['order']['0']['column'].' '.$_POST['order']['0']['dir'].' ';
}
else
{
	$query .= 'ORDER BY subject_ID ASC ';
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
	$sub_array[] = $row["subject_ID"];
	$sub_array[] = $row["subject_code"];
	$sub_array[] = $row["subject_TItle"];
	$sub_array[] = $row["Abbreviation"];
	$sub_array[] = '<td class="text-center"><div class="btn-group"><button type="button" class="btn btn-primary btn-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="icon-gear"></i> &nbsp;<span class="caret"></span></button><ul class="dropdown-menu dropdown-menu-right"><li><a href="#"  id="'.$row["subject_ID"].'"  class="update_sub"><i class="icon-pencil7"></i> Update</a></li></ul></div></td>';
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



        
