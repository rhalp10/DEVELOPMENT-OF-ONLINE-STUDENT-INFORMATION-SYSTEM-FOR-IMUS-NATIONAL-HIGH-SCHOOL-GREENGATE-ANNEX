<?php
include('../db.php');
include('function.php');
if(isset($_POST["operation"]))
{

	if($_POST["operation"] == "InsertGrade")
	{
		
		$secID_z = $_POST["secID_z"];
		$recs_ID = $_POST["recs_ID"];
		$g_firstgrade = $_POST["g_firstgrade"];
		$g_secondgrade = $_POST["g_secondgrade"];
		$g_thirdgrade = $_POST["g_thirdgrade"];
		$g_fourthgrade = $_POST["g_fourthgrade"];
		$g_finalgrade = $_POST["g_finalgrade"];
		$g_remarks = $_POST["g_remarks"];
		$sql = "INSERT INTO `record_studentgrade` (
		`rsg_ID`,
		`tsa_ID`,
		 `recs_ID`,
		  `first`,
		   `second`,
		    `third`,
		     `fourth`,
		     `final`,
		      `remarks`) 
		      VALUES (
		      NULL,
		       :secID_z,
		       :recs_ID,
		        :g_firstgrade,
		         :g_secondgrade,
		          :g_thirdgrade,
		           :g_fourthgrade,
		            :g_finalgrade,
		             :g_remarks);";
		$statement = $conn->prepare($sql);
		
		$result = $statement->execute(
			array(
				':secID_z'			=>	$secID_z,
				':recs_ID'			=>	$recs_ID,
				':g_firstgrade'	=>	$g_firstgrade,
				':g_secondgrade'	=>	$g_secondgrade,
				':g_thirdgrade'	=>	$g_thirdgrade,
				':g_fourthgrade'	=>	$g_fourthgrade,
				':g_finalgrade'	=>	$g_finalgrade,
				':g_remarks'	=>	$g_remarks
			)
		);

		if(!empty($result))
		{
			echo 'Grade Successfully Added';
		}
	}
	if($_POST["operation"] == "UpdateGrade")
	{
		
		$secID_z = $_POST["secID_z"];
		$recs_ID = $_POST["recs_ID"];
		$g_firstgrade = $_POST["g_firstgrade"];
		$g_secondgrade = $_POST["g_secondgrade"];
		$g_thirdgrade = $_POST["g_thirdgrade"];
		$g_fourthgrade = $_POST["g_fourthgrade"];
		$g_finalgrade = $_POST["g_finalgrade"];
		$g_remarks = $_POST["g_remarks"];
		$sql = "UPDATE `record_studentgrade` SET 
		
		`first`  	= :g_firstgrade  ,
		`second` 	= :g_secondgrade  ,
		`third` 	= :g_thirdgrade ,
		`fourth` 	= :g_fourthgrade  ,
		`final` 	= :g_finalgrade ,
		`remarks` 	= :g_remarks 
		WHERE tsa_ID = :secID_z AND recs_ID = :recs_ID;";
		$statement = $conn->prepare($sql);
		
		$result = $statement->execute(
			array(
				':secID_z'			=>	$secID_z,
				':recs_ID'			=>	$recs_ID,
				':g_firstgrade'		=>	$g_firstgrade,
				':g_secondgrade'	=>	$g_secondgrade,
				':g_thirdgrade'		=>	$g_thirdgrade,
				':g_fourthgrade'	=>	$g_fourthgrade,
				':g_finalgrade'		=>	$g_finalgrade,
				':g_remarks'		=>	$g_remarks
			)
		);

		if(!empty($result))
		{
			echo 'Grade Successfully Updated';
		}
	}
	if($_POST["operation"] == "InsertLOV")
	{
	

	   $lov_recs_ID = $_POST["lov_recs_ID"];
       $lov_tsa_ID = $_POST["lov_secID_z"];

       $lovarray = array();
       $lovarray[] = $_POST["makadios1_1"];
       $lovarray[] = $_POST["makadios1_2"];
       $lovarray[] = $_POST["makadios1_3"];
       $lovarray[] = $_POST["makadios1_4"];

       $lovarray[] = $_POST["makadios2_1"];
       $lovarray[] = $_POST["makadios2_2"];
       $lovarray[] = $_POST["makadios2_3"];
       $lovarray[] = $_POST["makadios2_4"];

       $lovarray[] = $_POST["makatao1_1"];
       $lovarray[] = $_POST["makatao1_2"];
       $lovarray[] = $_POST["makatao1_3"];
       $lovarray[] = $_POST["makatao1_4"];

       $lovarray[] = $_POST["makatao2_1"];
       $lovarray[] = $_POST["makatao2_2"];
       $lovarray[] = $_POST["makatao2_3"];
       $lovarray[] = $_POST["makatao2_4"];

       $lovarray[] = $_POST["makakalikasan_1"];
       $lovarray[] = $_POST["makakalikasan_2"];
       $lovarray[] = $_POST["makakalikasan_3"];
       $lovarray[] = $_POST["makakalikasan_4"];

       $lovarray[] = $_POST["makabansa1_1"];
       $lovarray[] = $_POST["makabansa1_2"];
       $lovarray[] = $_POST["makabansa1_3"];
       $lovarray[] = $_POST["makabansa1_4"];

       $lovarray[] = $_POST["makabansa2_1"];
       $lovarray[] = $_POST["makabansa2_2"];
       $lovarray[] = $_POST["makabansa2_3"];
       $lovarray[] = $_POST["makabansa2_4"];
       $lovarray = json_encode($lovarray,true);

	$sql = "INSERT INTO `record_studentlearnerobserve` (`rslr_ID`, `tsa_ID`, `recs_ID`, `learnervalues`) VALUES (NULL, :tsa_ID, :recs_ID, :lovarray);";
		$statement = $conn->prepare($sql);
		
		$result = $statement->execute(
			array(
				':tsa_ID'			=>	$lov_tsa_ID,
				':recs_ID'			=>	$lov_recs_ID,
				':lovarray'		=>	$lovarray
			)
		);

		if(!empty($result))
		{
			echo 'Learners Observed Values Successfully Added';
		}
       

	}

	if($_POST["operation"] == "UpdateLOV")
	{
	

	   $lov_recs_ID = $_POST["lov_recs_ID"];
       $lov_tsa_ID = $_POST["lov_secID_z"];

       $lovarray = array();
       $lovarray[] = $_POST["makadios1_1"];
       $lovarray[] = $_POST["makadios1_2"];
       $lovarray[] = $_POST["makadios1_3"];
       $lovarray[] = $_POST["makadios1_4"];

       $lovarray[] = $_POST["makadios2_1"];
       $lovarray[] = $_POST["makadios2_2"];
       $lovarray[] = $_POST["makadios2_3"];
       $lovarray[] = $_POST["makadios2_4"];

       $lovarray[] = $_POST["makatao1_1"];
       $lovarray[] = $_POST["makatao1_2"];
       $lovarray[] = $_POST["makatao1_3"];
       $lovarray[] = $_POST["makatao1_4"];

       $lovarray[] = $_POST["makatao2_1"];
       $lovarray[] = $_POST["makatao2_2"];
       $lovarray[] = $_POST["makatao2_3"];
       $lovarray[] = $_POST["makatao2_4"];

       $lovarray[] = $_POST["makakalikasan_1"];
       $lovarray[] = $_POST["makakalikasan_2"];
       $lovarray[] = $_POST["makakalikasan_3"];
       $lovarray[] = $_POST["makakalikasan_4"];

       $lovarray[] = $_POST["makabansa1_1"];
       $lovarray[] = $_POST["makabansa1_2"];
       $lovarray[] = $_POST["makabansa1_3"];
       $lovarray[] = $_POST["makabansa1_4"];

       $lovarray[] = $_POST["makabansa2_1"];
       $lovarray[] = $_POST["makabansa2_2"];
       $lovarray[] = $_POST["makabansa2_3"];
       $lovarray[] = $_POST["makabansa2_4"];
       $lovarray = json_encode($lovarray,true);

	$sql = "UPDATE `record_studentlearnerobserve` SET 
	`learnervalues` = :lovarray

	 WHERE `tsa_ID` = :tsa_ID AND `recs_ID` = :recs_ID;";
		$statement = $conn->prepare($sql);
		
		$result = $statement->execute(
			array(
				':tsa_ID'			=>	$lov_tsa_ID,
				':recs_ID'			=>	$lov_recs_ID,
				':lovarray'		=>	$lovarray
			)
		);

		if(!empty($result))
		{
			echo 'Learners Observed Values Successfully Added';
		}
       

	}

	
}
?>
