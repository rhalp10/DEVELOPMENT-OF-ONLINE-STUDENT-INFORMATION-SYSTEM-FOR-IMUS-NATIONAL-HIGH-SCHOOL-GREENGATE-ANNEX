<?php
include('../db.php');
include('function.php');
session_start();
$user_level = $_SESSION['login_level'];
$query = '';
$output = array();
$query .= "SELECT *,(IF(`ad`.`admission_Status` = 1, 'Accepted', 'Pending')) `a_status` FROM `admission` `ad`
LEFT JOIN `year_level` `yl` ON `ad`.`yl_ID`  = `yl`.`yl_ID`";
if(isset($_POST["search"]["value"]))
{
	$query .= 'WHERE admission_Name LIKE "%'.$_POST["search"]["value"].'%" ';
	$query .= 'OR yl_Name LIKE "%'.$_POST["search"]["value"].'%" ';
	
}
if(isset($_POST["order"]))
{
	$query .= 'ORDER BY '.$_POST['order']['0']['column'].' '.$_POST['order']['0']['dir'].' ';
}
else
{
	$query .= 'ORDER BY admission_ID DESC ';
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
	
  if ($row["admission_Status"] == 1) {
  	$stat = '<span class="label label-success">Accepted</span>';
  } else {
  	$stat = '<span class="label label-warning">Pending</span>';
  }
  
	
 	if ($row["admission_Status"] == 0 || $row["admission_Status"] == null) {
 		
 		$actionbutton =  '<td class="text-center"><div class="btn-group"><button type="button" class="btn btn-primary btn-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="icon-gear"></i> &nbsp;<span class="caret"></span></button><ul class="dropdown-menu dropdown-menu-right"><li><a href="#"  id="'.$row["admission_ID"].'"  class="confirm"><i class="icon-eye"></i> Confirm</a></li></ul></div></td>';
 	}
 	else{
 		$actionbutton =  '<td class="text-center"><div class="btn-group"><button type="button" class="btn btn-primary btn-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="icon-gear"></i> &nbsp;<span class="caret"></span></button><ul class="dropdown-menu dropdown-menu-right"><li><a href="#"  id="'.$row["admission_ID"].'"  class="view"><i class="icon-eye"></i> View</a></li></ul></div></td>';

 	}

	$sub_array = array();
	$sub_array[] = $row["admission_Date"];
	$sub_array[] = $row["yl_Name"];
	$sub_array[] = $row["admission_Name"];
	$sub_array[] = $stat;
	$sub_array[] = $actionbutton;
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



        
