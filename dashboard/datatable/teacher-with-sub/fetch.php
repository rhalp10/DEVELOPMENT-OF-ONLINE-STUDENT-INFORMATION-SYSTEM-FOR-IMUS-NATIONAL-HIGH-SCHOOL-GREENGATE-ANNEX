<?php
include('db.php');
include('function.php');
$query = '';
$output = array();
$query .= "SELECT * ";
$query .= " FROM `teacher_subject_assign` `tsa`
INNER JOIN `record_teacher_detail` `rtd` ON `tsa`.`rtd_ID` = `rtd`.`rtd_ID`
INNER JOIN `subject` `s` ON `tsa`.`subject_ID` = `s`.`subject_ID`
INNER JOIN `semester` `sem` ON `tsa`.`semester_ID` = `sem`.`semester_ID`";
if(isset($_POST["search"]["value"]))
{
  $query .= 'WHERE rtd_FName LIKE "%'.$_POST["search"]["value"].'%" ';
  $query .= 'OR rtd_MName LIKE "%'.$_POST["search"]["value"].'%" ';
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
  $semester_start = date_create($row["semester_start"]);
  $semester_end=date_create($row["semester_end"]);

  $sub_array = array();
  $sub_array[] = $row['tsa_ID'];
  $sub_array[] = $row['subject_TItle'];
  $sub_array[] = $row['rtd_FName'].' '.$row['rtd_MName'].' '.$row['rtd_LName'];
  $sub_array[] = date_format($semester_start,"Y").' - '.date_format($semester_end,"Y");
  $sub_array[] = check_status($row["semester_stat"]);
  
  $sub_array[] = '<div class="dropdown"><button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Action<span class="caret"></span></button><ul class="dropdown-menu"><li><a href="#" id="'.$row["tsa_ID"].'" class="update">Update</a></li><li><a href="#" id="'.$row["tsa_ID"].'" class="delete">Delete</a></li></ul></div>';
  // $sub_array[] = '<button type="button" name="delete" id="'.$row["id"].'" class="btn btn-danger btn-xs delete">Delete</button>';
  $data[] = $sub_array;
}
$output = array(
  "draw"        =>  intval($_POST["draw"]),
  "recordsTotal"    =>  $filtered_rows,
  "recordsFiltered" =>  get_total_all_records(),
  "data"        =>  $data
);
echo json_encode($output);

?>



        
