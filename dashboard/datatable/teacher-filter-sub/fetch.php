<?php
include('db.php');
include('function.php');
$query = '';
$output = array();
$query .= "SELECT `tsa`.`tsa_ID`,`sub`.`subject_code`,`sub`.`subject_TItle`,  CONCAT(YEAR(`sem`.`semester_start`),' - ',YEAR(`sem`.`semester_end`)) as `ay`, `rsec`.`section_Name` FROM `teacher_subject_assign` `tsa`
LEFT JOIN `semester` `sem` ON `sem`.`semester_ID` = `tsa`.`semester_ID`
LEFT JOIN `ref_section` `rsec` ON `rsec`.`section_ID` = `tsa`.`section_ID`
LEFT JOIN `subject` `sub` ON `sub`.`subject_ID` = `tsa`.`subject_ID`
LEFT JOIN `record_teacher_detail` `rtd` ON `rtd`.`rtd_ID` = `tsa`.`rtd_ID`";
if(isset($_POST["search"]["value"]))
{
	$query .= 'WHERE subject_code LIKE "%'.$_POST["search"]["value"].'%" ';
	$query .= 'OR subject_TItle LIKE "%'.$_POST["search"]["value"].'%" ';
	// $query .= 'OR ay LIKE "%'.$_POST["search"]["value"].'%" ';
	$query .= 'OR section_Name LIKE "%'.$_POST["search"]["value"].'%" ';
}
if(isset($_POST["order"]))
{
	$query .= 'ORDER BY '.$_POST['order']['0']['column'].' '.$_POST['order']['0']['dir'].' ';
}
else
{
	$query .= 'ORDER BY tsa_ID DESC ';
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
	$sub_array[] = $row["subject_code"];
	$sub_array[] = $row["subject_TItle"];
	$sub_array[] = $row["section_Name"];
	$sub_array[] = $row["ay"];
	$sub_array[] = '<div class="dropdown"><button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Action<span class="caret"></span></button><ul class="dropdown-menu"><li><a href="#" id="'.$row["tsa_ID"].'" class="update">Update</a></li><li><a href="#" id="'.$row["tsa_ID"].'" class="delete">Delete</a></li></ul></div>';
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



        
