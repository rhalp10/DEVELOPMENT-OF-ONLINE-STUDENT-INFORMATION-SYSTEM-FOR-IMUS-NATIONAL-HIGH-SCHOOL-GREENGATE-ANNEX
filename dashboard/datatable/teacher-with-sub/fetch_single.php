<?php
include('../db.php');
include('function.php');
if(isset($_POST["tsa_ID"]))
{
	$output = array();
	$statement = $conn->prepare(
		"SELECT * FROM `teacher_subject_assign` `tsa`
		INNER JOIN `record_teacher_detail` `rtd` ON `tsa`.`rtd_ID` = `rtd`.`rtd_ID`
		INNER JOIN `subject` `s` ON `tsa`.`subject_ID` = `s`.`subject_ID`
		INNER JOIN `semester` `sem` ON `tsa`.`semester_ID` = `sem`.`semester_ID`
		WHERE `tsa`.`tsa_ID` = '".$_POST["tsa_ID"]."' 
		LIMIT 1"
	);
	$statement->execute();
	$result = $statement->fetchAll();
	foreach($result as $row)
	{
		$semester_start = date_create($row["semester_start"]);
  		$semester_end=date_create($row["semester_end"]);
  		
		$output["teacherEmpID"] = $row["rtd_EmpID"];
		$output["teacherID"] = $row["rtd_ID"];
		$output["subjectID"] = $row["subject_ID"];
		$output["subject_code"] = $row["subject_code"];
		$output["sem"] = date_format($semester_start,"Y").' - '.date_format($semester_end,"Y");

		$output["section_ID"] = $row["section_ID"];
		$output["yl_ID"] = $row["yl_ID"];

	
	}
	echo json_encode($output);
}
?>
