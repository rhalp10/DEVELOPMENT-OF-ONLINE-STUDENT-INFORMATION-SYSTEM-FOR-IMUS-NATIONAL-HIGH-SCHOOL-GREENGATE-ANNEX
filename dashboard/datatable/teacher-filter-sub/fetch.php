<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "", "greengate_annex");
$column = array("yl.yl_ID", "yl.year_Name","sec.section_ID ");
function get_total_all_records()
{
	include('db.php');
	$statement = $conn->prepare("SELECT * FROM `teacher_subject_assign`");
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
$query = "SELECT *  FROM `teacher_subject_assign` `tsa`
LEFT JOIN `record_teacher_detail` `rtd` ON `tsa`.`rtd_ID` = `rtd`.`rtd_ID`
LEFT JOIN `subject` `s` ON `tsa`.`subject_ID` = `s`.`subject_ID`
LEFT JOIN `semester` `sem` ON `tsa`.`semester_ID` = `sem`.`semester_ID`
LEFT JOIN `ref_section` `sec`  ON `tsa`.`section_ID` = `sec`.`section_ID`
LEFT JOIN `year_level` `yl` ON `tsa`.`yl_ID` = `yl`.`yl_ID`  
";
$query .= " WHERE  ";
if(isset($_POST["is_category"]))
{
 // $query .= "yl.yl_ID = '".$_POST["is_category"]."' AND ";
	$query .= "yl.yl_ID = '".$_POST["is_category"]."'  AND ";
}
if(isset($_POST["search"]["value"]))
{
 $query .= '(yl.yl_ID LIKE "%'.$_POST["search"]["value"].'%" ';
 // $query .= 'OR product.name LIKE "%'.$_POST["search"]["value"].'%" ';
 // $query .= 'OR category.category_name LIKE "%'.$_POST["search"]["value"].'%" ';
 $query .= 'OR sec.section_ID LIKE "%'.$_POST["search"]["value"].'%") ';
}

if(isset($_POST["order"]))
{
 $query .= 'ORDER BY '.$column[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' ';
}
else
{
 $query .= 'ORDER BY yl.yl_ID DESC ';
}

$query1 = '';

if($_POST["length"] != 1)
{
 $query1 .= 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}

$number_filter_row = mysqli_num_rows(mysqli_query($connect, $query));

$result = mysqli_query($connect, $query . $query1);

$data = array();

while($row = mysqli_fetch_array($result))
{
 $semester_start = date_create($row["semester_start"]);
 $semester_end=date_create($row["semester_end"]);
 $sub_array = array();
 $sub_array[] = $row["tsa_ID"];
 $sub_array[] = $row["yl_Name"];
 $sub_array[] = $row["section_Name"];
 $sub_array[] = $row["subject_TItle"];
 $sub_array[] = $row['rtd_FName'].' '.$row['rtd_MName'].' '.$row['rtd_LName'];
 $sub_array[] = date_format($semester_start,"Y").' - '.date_format($semester_end,"Y");
 $sub_array[] = check_status($row["semester_stat"]);
 $sub_array[] = '<div class="dropdown"><button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Action<span class="caret"></span></button><ul class="dropdown-menu"><li><a href="#" id="'.$row["tsa_ID"].'" class="update">Update</a></li><li><a href="#" id="'.$row["tsa_ID"].'" class="delete">Delete</a></li></ul></div>';
 $data[] = $sub_array;
}

function get_all_data($connect)
{
 $query = "SELECT * FROM teacher_subject_assign";
 $result = mysqli_query($connect, $query);
 return mysqli_num_rows($result);
}

$output = array(
 "draw"    => intval($_POST["draw"]),
 "recordsTotal"  =>  get_all_data($connect),
 "recordsFiltered" => $number_filter_row,
 "data"    => $data
);

echo json_encode($output);

?>