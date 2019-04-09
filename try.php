<?php 
include("dbconfig.php");
$sql = "SELECT * FROM `user_accounts` `ua`
LEFT JOIN `ref_user_level` `rul` ON `rul`.`ulevel_ID` = `ua`.`ulevel_ID` "; 

$result = mysqli_query($con,$sql);
$data = array();
while ($row = mysqli_fetch_assoc($result)) {
	$data[] = $row["ulevel_Name"];
}

print_r(json_encode($data));
?>