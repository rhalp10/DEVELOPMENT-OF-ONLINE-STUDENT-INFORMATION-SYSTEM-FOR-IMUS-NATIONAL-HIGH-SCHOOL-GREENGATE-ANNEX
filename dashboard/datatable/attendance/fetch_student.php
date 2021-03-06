<?php
require_once('../class.function.php');
$account = new DTFunction();  		 

$query = '';
$output = array();
$query .= "
SELECT 
`res`.`rse_ID`,
`res`.`res_ID`,
`rsd`.`rsd_ID`,
`rsd`.`rsd_Img`,
`rsd`.`rsd_StudNum`,
`rsd`.`rsd_FName`,
`rsd`.`rsd_MName`,
`rsd`.`rsd_LName`,
`sx`.`sex_Name`,
`sn`.`suffix`

";
$query .= " FROM `room_enrolled_student` res
LEFT JOIN record_student_enrolled rse ON rse.rse_ID = res.rse_ID
LEFT JOIN record_student_details rsd ON rsd.rsd_ID = rse.rsd_ID
LEFT JOIN ref_suffixname sn ON sn.suffix_ID = rsd.suffix_ID
LEFT JOIN ref_sex sx ON sx.sex_ID = rsd.sex_ID";




if (isset($_REQUEST['room_ID'])) {
	$room_ID = $_REQUEST['room_ID'];
 	$query .= '  WHERE res.room_ID = '.$room_ID.' AND';
}
else{
	 $query .= ' WHERE';
}
if(isset($_POST["search"]["value"]))
{
 $query .= '(rsd_StudNum LIKE "%'.$_POST["search"]["value"].'%" ';
    $query .= 'OR rsd_FName LIKE "%'.$_POST["search"]["value"].'%" ';
    $query .= 'OR rsd_MName LIKE "%'.$_POST["search"]["value"].'%" ';
    $query .= 'OR rsd_LName LIKE "%'.$_POST["search"]["value"].'%" ';
    $query .= 'OR sex_Name LIKE "%'.$_POST["search"]["value"].'%" ';
    $query .= 'OR suffix LIKE "%'.$_POST["search"]["value"].'%" )';
}

if(isset($_POST["order"]))
{
	$query .= 'ORDER BY '.$_POST['order']['0']['column'].' '.$_POST['order']['0']['dir'].' ';
}
else
{
	$query .= 'ORDER BY rsd_FName ASC';
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
$z = 1;
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
		$res_ID = $row["res_ID"];

		$sub_array = array();
	
		
		// $sub_array[] = $row["rse_ID"];
		$sub_array[] = $z ;
		$sub_array[] = $row["rsd_StudNum"];
		$sub_array[] = ucwords(strtolower($row["rsd_FName"].' '.$row["rsd_MName"].'. '.$row["rsd_LName"].' '.$suffix));
		$sub_array[] = ucwords(strtolower($row["sex_Name"]));
		$sub_array[] = '
		<input type="hidden" name="res_ID[]" value="'.$res_ID.'">
		   <select class="form-control" data="'.$res_ID.'" id="attendance_'.$z.'" name="attendance[]">
                 <option value="1">Present</option>
                 <option value="0">Absent</option>
                </select>';

	$z ++;	
	$data[] = $sub_array;

}

$q = "SELECT * FROM `room_enrolled_student` where `room_ID` = ".$room_ID;
$filtered_rec = $account->get_total_all_records($q);

$output = array(
	"draw"				=>	intval($_POST["draw"]),
	"recordsTotal"		=> 	$filtered_rows,
	"recordsFiltered"	=>	$filtered_rec,
	"data"				=>	$data
);
echo json_encode($output);



?>



        
