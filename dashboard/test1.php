<?php 
include('../session.php');


require_once("../class.user.php");

  
$teacher_attnd = new USER();
$output = array();
$room_ID = $_REQUEST["room_ID"];
$query = "SELECT 
DISTINCT(`rsa`.`attendance_Time`)
FROM `room_student_attendance` rsa
where room_ID = '$room_ID'";
$statement = $teacher_attnd->runQuery($query);
$statement->execute();
$result = $statement->fetchAll();

foreach ($result as $row){
	$attendance_Time = strtotime($row["attendance_Time"]);
	$attnd_y = date("Y",$attendance_Time);	
	$attnd_m = date("m",$attendance_Time);	
	$attnd_d = date("d",$attendance_Time);	

	$output["full_date"][] = $row["attendance_Time"];
	$output["year"][] = date("Y",$attendance_Time);
	$output["month"][] = date("m",$attendance_Time);
	$output["dayz"][] = date("d",$attendance_Time);

	

}

echo json_encode($output);
?>