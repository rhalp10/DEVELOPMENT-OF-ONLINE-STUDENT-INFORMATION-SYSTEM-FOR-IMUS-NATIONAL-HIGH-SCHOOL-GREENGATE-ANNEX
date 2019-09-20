<?php
require_once('../class.function.php');
$account = new DTFunction();  		 // Create new connection by passing in your configuration array


$query = '';
$output = array();
$query .= "SELECT 
rse.rse_ID,
rse.rsd_ID,
rsd.rsd_FName,
rsd.rsd_MName,
rsd.rsd_LName,
sn.suffix,
CONCAT(YEAR(sem.sem_start),' - ',YEAR(sem.sem_end)) semyear,
yl.yl_Name ";
$query .= "FROM `record_student_enrolled` `rse`
LEFT JOIN `record_student_details` `rsd` ON `rsd`.`rsd_ID` = `rse`.`rsd_ID`
LEFT JOIN `ref_semester` `sem` ON `sem`.`sem_ID` = `rse`.`sem_ID`
LEFT JOIN `ref_year_level` `yl` ON `yl`.`yl_ID` = `rse`.`yl_ID`
LEFT JOIN `ref_suffixname` `sn` ON `sn`.`suffix_ID` = `rsd`.`rsd_ID`";
if(isset($_POST["search"]["value"]))
{
 $query .= 'WHERE rse_ID LIKE "%'.$_POST["search"]["value"].'%" ';
    $query .= 'OR rsd_FName LIKE "%'.$_POST["search"]["value"].'%" ';
    $query .= 'OR rsd_MName LIKE "%'.$_POST["search"]["value"].'%" ';
    $query .= 'OR rsd_LName LIKE "%'.$_POST["search"]["value"].'%" ';
    $query .= 'OR suffix LIKE "%'.$_POST["search"]["value"].'%" ';
    $query .= 'OR CONCAT(YEAR(sem.sem_start)," - ",YEAR(sem.sem_end)) LIKE "%'.$_POST["search"]["value"].'%" ';
    $query .= 'OR yl_Name LIKE "%'.$_POST["search"]["value"].'%" ';
}


if(isset($_POST["order"]))
{
	$query .= 'ORDER BY '.$_POST['order']['0']['column'].' '.$_POST['order']['0']['dir'].' ';
}
else
{
	$query .= 'ORDER BY rse_ID DESC ';
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
	

		$sub_array = array();

		if($row["suffix"] =="N/A")
		{
			$suffix = "";
		}
		else
		{
			$suffix = $row["suffix"];
		}
		if($row["rsd_MName"] ==" " || $row["rsd_MName"] == NULL || empty($row["rsd_MName"]) )
		{
			$mname = " ";
		}
		else
		{
			$mname = $row["rsd_MName"].'. ';
		}
		
		$sub_array[] = $row["rse_ID"];
		$sub_array[] =   $row["rsd_FName"].' '.$mname.$row["rsd_LName"].' '.$suffix;
		$sub_array[] =  $row["semyear"];
		$sub_array[] =  $row["yl_Name"];
		$sub_array[] = '
		<div class="btn-group">
		  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		    Action
		  </button>
		  <div class="dropdown-menu">
		    <a class="dropdown-item view"  id="'.$row["rse_ID"].'">View</a>
		    <a class="dropdown-item edit"  id="'.$row["rse_ID"].'">Edit</a>
		    
		  </div>
		</div>';
		 // <div class="dropdown-divider"></div>
		 //    <a class="dropdown-item delete" id="'.$row["rse_ID"].'">Delete</a>
		

	
	$data[] = $sub_array;
}

$q = "SELECT * FROM `record_student_enrolled`";
$filtered_rec = $account->get_total_all_records($q);

$output = array(
	"draw"				=>	intval($_POST["draw"]),
	"recordsTotal"		=> 	$filtered_rows,
	"recordsFiltered"	=>	$filtered_rec,
	"data"				=>	$data
);
echo json_encode($output);



?>



        
