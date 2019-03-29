<?php
include('db.php');
include('function.php');
if(isset($_POST["operation"]))
{

	if($_POST["operation"] == "Add")
	{
		
		$yl_Name = $_POST["yl_Name"];
		$sql = "INSERT INTO `year_level` (`yl_Name`) VALUES ( :yl_Name);";


		$statement = $conn->prepare($sql);
		
		$result = $statement->execute(
			array(
				':yl_Name'			=>	$yl_Name,
			)
		);

		if(!empty($result))
		{
			echo 'Successfully Semester Added';
		}
	}

	if($_POST["operation"] == "Edit")
	{

		$yl_ID = $_POST["yl_ID"];
		
		$yl_Name = $_POST["yl_Name"];
		 $sql ="UPDATE `year_level` SET   `yl_Name` = :yl_Name WHERE `year_level`.`yl_ID` = :yl_ID;";
		
		$statement = $conn->prepare($sql);
		
		$result = $statement->execute(
				array(
					':yl_ID'	=>	$yl_ID,
					':yl_Name'	=>	$yl_Name
				)
			);
		if(!empty($result))
		{
			echo 'Data Updated';
		}
	}
}
?>
