<?php 
include('dbconfig.php');
if (isset($_POST["enrolee_name"])) {
	 $enrolee_name = addslashes($_POST["enrolee_name"]);
	 $enrolee_bday = addslashes($_POST["enrolee_bday"]);
	 $enrolee_age = addslashes($_POST["enrolee_age"]);
	 $enrolee_gender = addslashes($_POST["enrolee_gender"]);
	 $enrolee_address = addslashes($_POST["enrolee_address"]);
	 $enrolee_house = addslashes($_POST["enrolee_house"]);
	 $enrolee_parent = addslashes($_POST["enrolee_parent"]);
	 $enrolee_contact = addslashes($_POST["enrolee_contact"]);
	 $enrolee_altcontact = addslashes($_POST["enrolee_altcontact"]);
	 $enrolee_parentWork = addslashes($_POST["enrolee_parentWork"]);
	 $enrolee_living = addslashes($_POST["enrolee_living"]);

	if (isset($_POST["enrolee_ifnoInFeedProgReason"])) {
		$FeedProgReason = addslashes($_POST["enrolee_ifnoInFeedProgReason"]);
	}
	else{
		$FeedProgReason = "";
	}
		
	
	if (isset($_POST["enrolee_ifnoInDewormingReason"])) {
		$DewormingReason = addslashes($_POST["enrolee_ifnoInFeedProgReason"]);
	}
	else{
		$DewormingReason = "";
	}
	
	$enrolee_medDecease = $_POST["enrolee_medDecease"];
	$enrolee_medDeceaseDate = $_POST["enrolee_medDeceaseDate"];
	$enrolee_height = addslashes($_POST["enrolee_height"]);
	$enrolee_bmistat = addslashes($_POST["enrolee_bmistat"]);
	$enrolee_weight = addslashes($_POST["enrolee_weight"]);
	$enrolee_medDecease = json_encode($enrolee_medDecease);
	$enrolee_medDeceaseDate = json_encode($enrolee_medDeceaseDate);

	$sql = "INSERT INTO `admission` (
	`admission_ID`,
	 `admission_Name`,
	  `admission_bday`,
	   `admission_age`,
	    `admission_gender`,
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
	                  `admission_medDeceaseDate`) 
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
	                                 '$FeedProgReason',
	                                  '$DewormingReason',
	                                   '$enrolee_medDecease',
	                                    '$enrolee_medDeceaseDate');";
	  
	    if (mysqli_query($con,$sql) ) {
	    	echo "Success";
	    }
	    else{

	    	echo "Error".mysqli_error($con);
	    }


}

?>