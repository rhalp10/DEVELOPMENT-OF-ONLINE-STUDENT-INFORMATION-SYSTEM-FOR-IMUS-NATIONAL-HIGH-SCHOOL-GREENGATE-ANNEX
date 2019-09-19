<?php
require_once('../class.function.php');
$acadstaff = new DTFunction();  		 


$query = '';
$output = array();
$query .= "SELECT 
`acs`.`acs_ID`,
`rid`.`rid_Img`,
`rid`.`rid_FName`,
`rid`.`rid_MName`,
`rid`.`rid_LName`,
`rsf`.`suffix`,
`rp`.`pos_Name`,
`rs`.`subject_Title`,
`rsem`.`sem_ID`,
CONCAT(YEAR(`rsem`.`sem_start`),' - ',YEAR(`rsem`.`sem_end`)) `sem_year`,
`rsem`.`stat_ID`
";
$query .= " FROM `academic_staff` `acs`
LEFT JOIN `record_instructor_details` `rid` ON `rid`.`rid_ID` = `acs`.`rid_ID`
LEFT JOIN `ref_position` `rp` ON `rp`.`pos_ID` = `acs`.`pos_ID`
LEFT JOIN `ref_subject` `rs` ON `rs`.`subject_ID` = `acs`.`subject_ID`
LEFT JOIN `ref_semester` `rsem` ON `rsem`.`sem_ID` = `acs`.`sem_ID`
LEFT JOIN `ref_suffixname` `rsf` ON `rsf`.`suffix_ID` = `rid`.`suffix_ID`
";
if(isset($_POST["search"]["value"]))
{
 $query .= 'WHERE acs_ID LIKE "%'.$_POST["search"]["value"].'%" ';
    $query .= 'OR pos_Name LIKE "%'.$_POST["search"]["value"].'%" ';
}


if(isset($_POST["order"]))
{
	$query .= 'ORDER BY '.$_POST['order']['0']['column'].' '.$_POST['order']['0']['dir'].' ';
}
else
{
	$query .= 'ORDER BY acs_ID DESC ';
}
if($_POST["length"] != -1)
{
	$query .= 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}
$statement = $acadstaff->runQuery($query);
$statement->execute();
$result = $statement->fetchAll();
$data = array();
$filtered_rows = $statement->rowCount();
foreach($result as $row)
{
	
	if($row["suffix"] =="N/A")
	{
		$suffix = "";
	}
	else
	{
		$suffix = $row["suffix"];
	}
	$sub_array = array();
	
		
		$sub_array[] = $row["acs_ID"];
		$sub_array[] =  $row["rid_FName"].' '.$row["rid_MName"].'. '.$row["rid_LName"].' '.$suffix;
		$sub_array[] =  $row["subject_Title"];
		$sub_array[] =  $row["pos_Name"];
		$sub_array[] =  $row["sem_year"];
		$sub_array[] = '
		<div class="btn-group">
		  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		    Action
		  </button>
		  <div class="dropdown-menu">
		    <a class="dropdown-item view"  id="'.$row["acs_ID"].'">View</a>
		    <a class="dropdown-item edit"  id="'.$row["acs_ID"].'">Edit</a>
		     <div class="dropdown-divider"></div>
		    <a class="dropdown-item delete" id="'.$row["acs_ID"].'">Delete</a>
		  </div>
		</div>';
	$data[] = $sub_array;
}

$q = "SELECT * FROM `academic_staff`";
$filtered_rec = $acadstaff->get_total_all_records($q);

$output = array(
	"draw"				=>	intval($_POST["draw"]),
	"recordsTotal"		=> 	$filtered_rows,
	"recordsFiltered"	=>	$filtered_rec,
	"data"				=>	$data
);
echo json_encode($output);



?>



        
