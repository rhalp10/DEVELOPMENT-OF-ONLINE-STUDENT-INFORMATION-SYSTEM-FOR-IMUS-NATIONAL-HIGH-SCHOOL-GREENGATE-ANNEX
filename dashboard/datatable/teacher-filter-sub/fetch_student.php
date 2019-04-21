<?php
include('../db.php');
include('function.php');
session_start();
$user_level = $_SESSION['login_level'];
$query = '';
$output = array();
$query .= "SELECT * ";
$query .= " FROM `record_studentenrolled` `rse`
LEFT JOIN `teacher_subject_assign` `tsa` ON `tsa`.`tsa_ID` = `rse`.`tsa_ID`
LEFT JOIN `record_student_details` `rsd` ON `rsd`.`rsd_ID` = `rse`.`rsd_ID`
LEFT JOIN `ref_sex` `rs` ON `rs`.`sex_ID` = `rsd`.`sex_ID`
LEFT JOIN `ref_suffixname` `rsn` ON `rsn`.`suffix_ID` = `rsd`.`suffix_ID`
";

if (isset($_POST["secID_z"])) {
   $query .= 'WHERE `rse`.`tsa_ID` = "'.$_POST["secID_z"].'" AND ';
}
if(isset($_POST["search"]["value"]))
{
    $query .= '(recs_ID LIKE "%'.$_POST["search"]["value"].'%" ';
    $query .= 'OR rsd_LRN LIKE "%'.$_POST["search"]["value"].'%" ';
    $query .= 'OR rsd_FName LIKE "%'.$_POST["search"]["value"].'%" ';
    $query .= 'OR rsd_MName LIKE "%'.$_POST["search"]["value"].'%" ';
    $query .= 'OR rsd_LName LIKE "%'.$_POST["search"]["value"].'%" ';
    $query .= 'OR sex_Name LIKE "%'.$_POST["search"]["value"].'%" )';
}
if(isset($_POST["order"]))
{
  $query .= 'ORDER BY '.$_POST['order']['0']['column'].' '.$_POST['order']['0']['dir'].' ';
}
else
{
  $query .= 'ORDER BY recs_ID DESC ';
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
  $sub_array[] = $row['recs_ID'];
  $sub_array[] = $row['rsd_LRN'];
  $sub_array[] = $row['rsd_FName'].' '.$row['rsd_MName'].' '.$row['rsd_LName'];
  $sub_array[] = $row['sex_Name'];
   if ($user_level == 4) {
    $sub_array[] = '<div class="dropdown"><button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Action<span class="caret"></span></button><ul class="dropdown-menu"><li><a href="#" id="'.$row["recs_ID"].'" class="studAttendance">Attendance</a></li><li><a href="#" id="'.$row["recs_ID"].'" class="studGrade">Grade</a></li>
    <li><a href="#" id="'.$row["recs_ID"].'" class="studstudLO" id="studstudLO">Learner observed</a></li>
<li><a href="#" id="'.$row["recs_ID"].'" class="print_form138" id="print_form138" >Print Form138</a></li>
    </ul></div>';
  
   }
   if ($user_level == 1) {
    $sub_array[] = '<div class="dropdown"><button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Action<span class="caret"></span></button><ul class="dropdown-menu"><li><a href="#" id="'.$row["recs_ID"].'" class="remove_studInClass">Remove</a></li></ul></div>';
   }
  
  // $sub_array[] = '<button type="button" name="delete_teacher" id="'.$row["id"].'" class="btn btn-danger btn-xs delete_teacher">Delete</button>';
  $data[] = $sub_array;
}
$output = array(
  "draw"        =>  intval($_POST["draw"]),
  "recordsTotal"    =>  $filtered_rows,
  "recordsFiltered" =>  get_total_records_of_student(),
  "data"        =>  $data
);
echo json_encode($output);

?>



        
