<?php
require_once('../class.function.php');
$account = new DTFunction();  		 // Create new connection by passing in your configuration array


$query = '';
$output = array();
$query .= "SELECT 
*,
(
	IF(`adm`.`admission_Status` = 1, 
	'<span class=\'badge badge-primary\'>PENDING REQUIREMENTS</span>'
	,
	(
		IF(`adm`.`admission_Status` = 2, 
		'<span class=\'badge badge-success\'>REQUIREMENTS COMPLETE</span>',
		'<span class=\'badge badge-danger\'>PENDING CONFIRMATION</span>')
	)
	)
) `a_status`  ";
$query .= "FROM `admission_student_details` `adm`
LEFT JOIN `ref_year_level` `yl` ON `yl`.`yl_ID` = `adm`.`yl_ID`
LEFT JOIN `ref_suffixname` `rsf` ON `rsf`.`suffix_ID` = `adm`.`suffix_ID`";
if(isset($_POST["search"]["value"]))
{
 $query .= 'WHERE admission_ID LIKE "%'.$_POST["search"]["value"].'%" ';
    $query .= 'OR admission_FName LIKE "%'.$_POST["search"]["value"].'%" ';
    $query .= 'OR admission_MName LIKE "%'.$_POST["search"]["value"].'%" ';
    $query .= 'OR admission_LName LIKE "%'.$_POST["search"]["value"].'%" ';
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
$statement = $account->runQuery($query);
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
		if($row["admission_MName"] ==" " || $row["admission_MName"] == NULL || empty($row["admission_MName"]) )
		{
			$mname = " ";
		}
		else
		{
			$mname = $row["admission_MName"].'. ';
		}

		$sub_array = array();

		$sub_array[] = $row["admission_ID"];
		$sub_array[] =  $row["admission_Date"];
		$sub_array[] =  $row["yl_Name"];
		$sub_array[] =  $row["admission_FName"].' '.$mname.$row["admission_LName"].' '.$suffix;
		$sub_array[] =  $row["a_status"];
		if ($row["admission_Status"]== 0){
			$czf = '<a class="dropdown-item confirm"  id="'.$row["admission_ID"].'">Confirm</a>';
		}
		else{
			$czf = '';
		}
		$sub_array[] = '
		<div class="btn-group">
		  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		    Action
		  </button>
		  <div class="dropdown-menu">
		    <a class="dropdown-item view"  id="'.$row["admission_ID"].'">View</a>
		    '.$czf.'
		    
		  </div>
		</div>';
		// <div class="dropdown-divider"></div>
		// <a class="dropdown-item delete" id="'.$row["admission_ID"].'">Delete</a>
		


	
	$data[] = $sub_array;
}

$q = "SELECT * FROM `admission_student_details`";
$filtered_rec = $account->get_total_all_records($q);

$output = array(
	"draw"				=>	intval($_POST["draw"]),
	"recordsTotal"		=> 	$filtered_rows,
	"recordsFiltered"	=>	$filtered_rec,
	"data"				=>	$data
);
echo json_encode($output);



?>



        
