<?php 
require_once("class.user.php");

	
$auth_user = new USER();
$output = array();
if (isset($_REQUEST["action"])) {
	if ($_REQUEST["action"] == "admission") {
		try{

		$adm_gradelevel = addslashes($_POST["adm_gradelevel"]);
		$adm_fname = addslashes($_POST["adm_fname"]);
		$adm_mname = addslashes($_POST["adm_mname"]);
		$adm_lname = addslashes($_POST["adm_lname"]);
		$adm_suffix = addslashes($_POST["adm_suffix"]);
		$adm_email = addslashes($_POST["adm_email"]);
		$adm_bod = addslashes($_POST["adm_bod"]);
		$adm_bod_age = addslashes($_POST["adm_bod_age"]);
		$adm_sex = addslashes($_POST["adm_sex"]);
		$adm_address = addslashes($_POST["adm_address"]);
		$adm_house = addslashes($_POST["adm_house"]);
		$adm_pg_name = addslashes($_POST["adm_pg_name"]);
		$adm_pg_contact = addslashes($_POST["adm_pg_contact"]);
		$adm_pg_alt_contact = addslashes($_POST["adm_pg_alt_contact"]);
		$adm_parentjob = addslashes($_POST["adm_parentjob"]);
		$adm_studliving = addslashes($_POST["adm_studliving"]);
		$adm_height = addslashes($_POST["adm_height"]);
		$adm_weight = addslashes($_POST["adm_weight"]);
		$adm_bmis = addslashes($_POST["adm_bmis"]);
		$adm_bmistat = addslashes($_POST["adm_bmistat"]);
		$adm_FeedProg = addslashes($_POST["adm_FeedProg"]);
		$adm_InDeworming = addslashes($_POST["adm_InDeworming"]);
		$enrolee_medDecease1 = addslashes($_POST["enrolee_medDecease1"]);
		$enrolee_medDecease2 = addslashes($_POST["enrolee_medDecease2"]);
		$enrolee_medDecease3 = addslashes($_POST["enrolee_medDecease3"]);
		$enrolee_medDecease4 = addslashes($_POST["enrolee_medDecease4"]);
		$enrolee_medDeceaseDate1 = addslashes($_POST["enrolee_medDeceaseDate1"]);
		$enrolee_medDeceaseDate2 = addslashes($_POST["enrolee_medDeceaseDate2"]);
		$enrolee_medDeceaseDate3 = addslashes($_POST["enrolee_medDeceaseDate3"]);
		$enrolee_medDeceaseDate4 = addslashes($_POST["enrolee_medDeceaseDate4"]);

		$emd = array(
			$enrolee_medDecease1,
			$enrolee_medDecease2,
			$enrolee_medDecease3,
			$enrolee_medDecease4,
		);
		$emdd = array(
			$enrolee_medDeceaseDate1,
			$enrolee_medDeceaseDate2,
			$enrolee_medDeceaseDate3,
			$enrolee_medDeceaseDate4,
		);	
		 $enrolee_medDecease = json_encode($emd);
		 $enrolee_medDeceaseDate = json_encode($emdd);


			$sql = "INSERT INTO `admission_student_details` (
			`admission_ID`,
			 `admission_StudNum`,
			  `admission_FName`,
			   `admission_MName`,
			    `admission_LName`,
			     `suffix_ID`,
			      `sex_ID`,
			       `admission_Email`,
			        `admission_Bday`,
			         `admission_Address`,
			          `admission_Height`,
			           `admission_BMIStat`,
			            `admission_Weight`,
			             `admission_House`,
			              `admission_Parent`,
			               `admission_Contact`,
			                `admission_Altcontact`,
			                 `admission_ParentWork`,
			                  `admission_Living`,
			                   `admission_FeedProgReason`,
			                    `admission_DewormingReason`,
			                     `admission_medDecease`,
			                      `admission_medDeceaseDate`,
			                       `yl_ID`,
			                        `admission_Date`,
			                         `admission_Status`) 
			VALUES (
			NULL,
			 NULL,
			  '$adm_fname',
			   '$adm_mname',
			    '$adm_lname',
			     '$adm_suffix',
			      '$adm_sex',
			       '$adm_email',
			        '$adm_bod',
			         '$adm_address',
			          '$adm_height',
			           '$adm_bmis($adm_bmistat)',
			            '$adm_weight',
			             '$adm_house',
			              '$adm_pg_name',
			               '$adm_pg_contact',
			                '$adm_pg_alt_contact',
			                 '$adm_parentjob',
			                  '$adm_studliving',
			                   '$adm_FeedProg',
			                    '$adm_InDeworming',
			                     '$enrolee_medDecease',
			                      '$enrolee_medDeceaseDate',
			                       '$adm_gradelevel',
			                        CURRENT_TIMESTAMP,
			                         '0');";
			$statement = $auth_user->runQuery($sql);
			$statement->execute();
			$output['success'] = "Thank you. You will receive a confirmation to your GMail.";
		}
		catch (PDOException $e)
		{
			$output['error'] = $e->getMessage();
		}
		
	}
	if($_REQUEST["action"] == "admission_files"){

		try{
			$admission_ID  = $_REQUEST["admission_ID"];
			
			if(isset($_FILES["rcard"]["tmp_name"])){
				$rcard_origin_name = $_FILES["rcard"]["name"];
				$rcn = array('rcard',$rcard_origin_name);
				$rcard_name = json_encode($rcn);
				$rcard_type = $_FILES["rcard"]["type"];
				$rcard_file = addslashes(file_get_contents($_FILES['rcard']['tmp_name']));
				$sql = "INSERT INTO 
				`admission_attachment` 
				(`attachment_ID`,
				 `admission_ID`,
				  `attachment_Name`,
				   `attachment_MIME`,
				    `attachment_Data`,
				     `attachment_Date`) 
				     VALUES (
				     NULL,
				      '$admission_ID',
				       '$rcard_name',
				        '$rcard_type',
				         '$rcard_file', CURRENT_TIMESTAMP);";
				$statement = $auth_user->runQuery($sql);
				$statement->execute();

			}
			if (isset($_FILES["bcert"]["tmp_name"])){
				$bcert_origin_name = $_FILES["bcert"]["name"];
				$bcert = array('bcert',$bcert_origin_name);
				$bcert_name = json_encode($bcert);
				$bcert_type = $_FILES["bcert"]["type"];
				$bcert_file = addslashes(file_get_contents($_FILES['bcert']['tmp_name']));
				$sql = "INSERT INTO 
				`admission_attachment` 
				(`attachment_ID`,
				 `admission_ID`,
				  `attachment_Name`,
				   `attachment_MIME`,
				    `attachment_Data`,
				     `attachment_Date`) 
				     VALUES (
				     NULL,
				      '$admission_ID',
				       '$bcert_name',
				        '$bcert_type',
				         '$bcert_file', CURRENT_TIMESTAMP);";
				$statement = $auth_user->runQuery($sql);
				$statement->execute();

			}
			if (isset($_FILES["pic1x1"]["tmp_name"])){
				$pic1x1_origin_name = $_FILES["pic1x1"]["name"];
				$pic1x1 = array('pic1x1',$pic1x1_origin_name);
				$pic1x1_name = json_encode($pic1x1);
				$pic1x1_type = $_FILES["pic1x1"]["type"];
				$pic1x1_file = addslashes(file_get_contents($_FILES['pic1x1']['tmp_name']));
				$sql = "INSERT INTO 
				`admission_attachment` 
				(`attachment_ID`,
				 `admission_ID`,
				  `attachment_Name`,
				   `attachment_MIME`,
				    `attachment_Data`,
				     `attachment_Date`) 
				     VALUES (
				     NULL,
				      '$admission_ID',
				       '$pic1x1_name',
				        '$pic1x1_type',
				         '$pic1x1_file', CURRENT_TIMESTAMP);";
				$statement = $auth_user->runQuery($sql);
				$statement->execute();
			}
			if (isset($_FILES["gmoralcert"]["tmp_name"])){
				$gmoralcert_origin_name = $_FILES["gmoralcert"]["name"];
				$gmoralcert = array('gmoralcert',$gmoralcert_origin_name);
				$gmoralcert_name = json_encode($gmoralcert);
				$gmoralcert_type = $_FILES["gmoralcert"]["type"];
				$gmoralcert_file = addslashes(file_get_contents($_FILES['gmoralcert']['tmp_name']));
				$sql = "INSERT INTO 
				`admission_attachment` 
				(`attachment_ID`,
				 `admission_ID`,
				  `attachment_Name`,
				   `attachment_MIME`,
				    `attachment_Data`,
				     `attachment_Date`) 
				     VALUES (
				     NULL,
				      '$admission_ID',
				       '$gmoralcert_name',
				        '$gmoralcert_type',
				         '$gmoralcert_file', CURRENT_TIMESTAMP);";
				$statement = $auth_user->runQuery($sql);
				$statement->execute();
			}
			if (isset($_FILES["brgyclrnc"]["tmp_name"])){
				$brgyclrnc_origin_name = $_FILES["brgyclrnc"]["name"];
				$brgyclrnc = array('brgyclrnc',$brgyclrnc_origin_name);
				$brgyclrnc_name = json_encode($brgyclrnc);
				$brgyclrnc_type = $_FILES["brgyclrnc"]["type"];
				$brgyclrnc_file = addslashes(file_get_contents($_FILES['brgyclrnc']['tmp_name']));
				$sql = "INSERT INTO 
				`admission_attachment` 
				(`attachment_ID`,
				 `admission_ID`,
				  `attachment_Name`,
				   `attachment_MIME`,
				    `attachment_Data`,
				     `attachment_Date`) 
				     VALUES (
				     NULL,
				      '$admission_ID',
				       '$brgyclrnc_name',
				        '$brgyclrnc_type',
				         '$brgyclrnc_file', CURRENT_TIMESTAMP);";
				$statement = $auth_user->runQuery($sql);
				$statement->execute();
			}
			if (isset($_FILES["financial"]["tmp_name"])){
			
				$financial_origin_name = $_FILES["financial"]["name"];
				$financial = array('financial',$financial_origin_name);
				$financial_name = json_encode($financial);
				$financial_type = $_FILES["financial"]["type"];
				if(empty($_FILES['financial']['tmp_name'])){
					$financial_file = "";
				}
				else{
					$financial_file = addslashes(file_get_contents($_FILES['financial']['tmp_name']));
				}
				
				$sql = "INSERT INTO 
				`admission_attachment` 
				(`attachment_ID`,
				 `admission_ID`,
				  `attachment_Name`,
				   `attachment_MIME`,
				    `attachment_Data`,
				     `attachment_Date`) 
				     VALUES (
				     NULL,
				      '$admission_ID',
				       '$financial_name',
				        '$financial_type',
				         '$financial_file', CURRENT_TIMESTAMP);";
				$statement = $auth_user->runQuery($sql);
				$result = $statement->execute();

				if(!empty($result))
				{
					$sql = "UPDATE `admission_student_details` SET `admission_Status` = '2' WHERE `admission_student_details`.`admission_ID` = $admission_ID;";
					$statement = $auth_user->runQuery($sql);
					$result = $statement->execute();

					echo 'Successfully Deleted';
				}

				
			}

			$output['success'] = "Thank you. You will receive a confirmation email to your GMail. ";
		}
		catch (PDOException $e)
		{
			$output['error'] = $e->getMessage();
		}

		
		
		

	}
}

echo json_encode($output,true);
?>