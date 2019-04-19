<?php
include('../db.php');
include('function.php');
$query = '';
$output = array();
$query .= "SELECT * ";
$query .= " FROM `record_parent_details` `rpd` INNER JOIN `record_student_details` `rsd` ON `rpd`.`rsd_ID` = `rsd`.`rsd_ID` INNER JOIN `ref_sex` `rsp` ON `rpd`.sex_ID = `rsp`.`sex_ID`";
if(isset($_POST["search"]["value"]))
{
 $query .= 'WHERE parent_ID LIKE "%'.$_POST["search"]["value"].'%" ';
}
if(isset($_POST["order"]))
{
  $query .= 'ORDER BY '.$_POST['order']['0']['column'].' '.$_POST['order']['0']['dir'].' ';
}
else
{
  $query .= 'ORDER BY parent_ID DESC ';
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
  $sub_array[] = $row['parent_ID'];
  $sub_array[] = $row['rsd_LRN'];
  $sub_array[] = $row['parent_FName'].' '.$row['parent_MName'].' '.$row['parent_LName'];
  $sub_array[] = $row['sex_Name'];
  $sub_array[] = '<div class="dropdown"><button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Action<span class="caret"></span></button><ul class="dropdown-menu"><li><a href="#" id="'.$row["parent_ID"].'" class="update">Update</a></li></div>';
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



        
