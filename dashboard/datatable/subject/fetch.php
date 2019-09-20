<?php
require_once('../class.function.php');
$account = new DTFunction();  		 // Create new connection by passing in your configuration array


$query = '';
$output = array();
$query .= "SELECT 
* ";
$query .= "FROM `ref_subject` ";
if(isset($_POST["search"]["value"]))
{
 $query .= 'WHERE subject_ID LIKE "%'.$_POST["search"]["value"].'%" ';
    $query .= 'OR subject_Code LIKE "%'.$_POST["search"]["value"].'%" ';
    $query .= 'OR subject_Title LIKE "%'.$_POST["search"]["value"].'%" ';
    $query .= 'OR Abbreviation LIKE "%'.$_POST["search"]["value"].'%" ';
}


if(isset($_POST["order"]))
{
	$query .= 'ORDER BY '.$_POST['order']['0']['column'].' '.$_POST['order']['0']['dir'].' ';
}
else
{
	$query .= 'ORDER BY subject_ID DESC ';
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
	
		
		$sub_array[] = $row["subject_ID"];
		$sub_array[] =  $row["subject_Code"];
		$sub_array[] =  $row["subject_Title"];
		$sub_array[] =  $row["Abbreviation"];
		$sub_array[] = '
		<div class="btn-group">
		  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		    Action
		  </button>
		  <div class="dropdown-menu">
		    <a class="dropdown-item view"  id="'.$row["subject_ID"].'">View</a>
		    <a class="dropdown-item edit"  id="'.$row["subject_ID"].'">Edit</a>
		     
		  </div>
		</div>';
		// <div class="dropdown-divider"></div>
		//     <a class="dropdown-item delete" id="'.$row["subject_ID"].'">Delete</a>
	$data[] = $sub_array;
}

$q = "SELECT * FROM `ref_subject`";
$filtered_rec = $account->get_total_all_records($q);

$output = array(
	"draw"				=>	intval($_POST["draw"]),
	"recordsTotal"		=> 	$filtered_rows,
	"recordsFiltered"	=>	$filtered_rec,
	"data"				=>	$data
);
echo json_encode($output);



?>



        
