<?php 
include('dbconfig.php');
if (isset($_REQUEST["enrolee_name"])) {

	 $enrolee_gradelevel = addslashes($_REQUEST["gradelevel"]);
	 $enrolee_email = addslashes($_REQUEST["enrolee_email"]);
	 $enrolee_name = addslashes($_REQUEST["enrolee_name"]);
	 $enrolee_bday = addslashes($_REQUEST["enrolee_bday"]);
	 $enrolee_age = addslashes($_REQUEST["enrolee_age"]);
	 $enrolee_gender = addslashes($_REQUEST["enrolee_gender"]);
	 $enrolee_address = addslashes($_REQUEST["enrolee_address"]);
	 $enrolee_house = addslashes($_REQUEST["enrolee_house"]);
	 $enrolee_parent = addslashes($_REQUEST["enrolee_parent"]);
	 $enrolee_contact = addslashes($_REQUEST["enrolee_contact"]);
	 $enrolee_altcontact = addslashes($_REQUEST["enrolee_altcontact"]);
	 $enrolee_parentWork = addslashes($_REQUEST["enrolee_parentWork"]);
	 $enrolee_living = addslashes($_REQUEST["enrolee_living"]);

	$enrolee_InDeworming = addslashes($_REQUEST["enrolee_InDeworming"]);
	$enrolee_FeedProg = addslashes($_REQUEST["enrolee_FeedProg"]);
	
	
	
	$enrolee_height = addslashes($_REQUEST["enrolee_height"]);
	$enrolee_bmistat = addslashes($_REQUEST["enrolee_bmistat"]);
	$enrolee_weight = addslashes($_REQUEST["enrolee_weight"]);
	
	$emd = array($_REQUEST["enrolee_medDecease1"],$_REQUEST["enrolee_medDecease2"],$_REQUEST["enrolee_medDecease3"],$_REQUEST["enrolee_medDecease4"]);
	$enrolee_medDecease = json_encode($emd);
	$emdd = array($_REQUEST["enrolee_medDeceaseDate1"],$_REQUEST["enrolee_medDeceaseDate2"],$_REQUEST["enrolee_medDeceaseDate3"],$_REQUEST["enrolee_medDeceaseDate4"]);
	$enrolee_medDeceaseDate = json_encode($emdd);

	$sql = "INSERT INTO `admission` (
	`admission_ID`,
	 `admission_Name`,
	  `admission_bday`,
	   `admission_age`,
	    `sex_ID`,
	     `admission_height`,
	      `admission_bmistat`,
	       `admission_weight`,
	        `admission_address`,
	         `admission_house`,
	          `admission_parent`,
	           `admission_contact`,
	            `admission_altcontact`,
	             `admission_parentWork`,
	              `admission_living`,
	               `admission_FeedProgReason`,
	                `admission_DewormingReason`,
	                 `admission_medDecease`,
	                  `admission_medDeceaseDate`,
	                  `yl_ID`,
	                  `admission_Email`
	                  ) 
	                  VALUES (
	                  NULL,
	                   '$enrolee_name',
	                    '$enrolee_bday',
	                     '$enrolee_age',
	                      '$enrolee_gender',
	                       '$enrolee_height',
	                        '$enrolee_bmistat',
	                         '$enrolee_weight',
	                          '$enrolee_address',
	                           '$enrolee_house',
	                            '$enrolee_parent',
	                             '$enrolee_contact',
	                              '$enrolee_altcontact',
	                               '$enrolee_parentWork',
	                                '$enrolee_living',
	                                 '$enrolee_FeedProg',
	                                  '$enrolee_InDeworming',
	                                   '$enrolee_medDecease',
	                                    '$enrolee_medDeceaseDate',
	                                	'$enrolee_gradelevel',
	                                	'$enrolee_email');";
	  
	    if (mysqli_query($con,$sql) ) {
	    	echo "Success";
	    }
	    else{

	    	echo "Error".mysqli_error($con);
	    }


}




?>
