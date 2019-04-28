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
	    	echo "Thank you. You will receive a confirmation to your GMail.";
	    }
	    else{

	    	echo "Error".mysqli_error($con);
	    }


}
if (isset($_POST['submit_files'])) {
	$admission_ID = "";
		if (isset($_POST["admission_ID"])) {
			$admission_ID = $_POST["admission_ID"];
		}
	function multi_file_upload($con,$fileName,$req_ID){
		$admission_ID = "";
		if (isset($_POST["admission_ID"])) {
			$admission_ID = $_POST["admission_ID"];
		}
		
		$udir = "assets/uploads/";
		if (!empty($_FILES[$fileName]["name"])) {
			
			$target_file =  basename($_FILES[$fileName]["name"]);
			$FileName = pathinfo($_FILES[$fileName]['name'], PATHINFO_FILENAME);
			$uploadOk = 1;
			$FileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
			// Check if image file is a actual image or fake image
			if(isset($_POST["submit"])) {
			    $check = getimagesize($_FILES[$fileName]["tmp_name"]);
			    if($check !== false) {
			        // echo "File is an image - " . $check["mime"] . ".";
			        $uploadOk = 1;
			    } else {
			        // echo "File is not an image.";
			        $uploadOk = 0;
			    }
			}
			// Check if file already exists then rename
			
			$increment = '';
			while(file_exists($udir.$FileName . $increment . '.' . $FileType)) {
			    $increment++;
			    $uploadOk == 1;
			}
		
			$target_fileName = $FileName . $increment . '.' . $FileType;
			 $target_file = $udir.$target_fileName;

			// Allow certain file formats
			if($FileType != "jpg" && 
				$FileType != "png" && 
				$FileType != "jpeg" && 
				$FileType != "rar" && 
				$FileType != "zip" && 
				$FileType != "pdf" && 
				$FileType != "gif" ) {
			    // echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
			    $uploadOk = 0;
			}
			// Check if $uploadOk is set to 0 by an error
			if ($uploadOk == 0) {
			    // echo "Sorry, your file was not uploaded.";
			// if everything is ok, try to upload file
			} else {
			    if (move_uploaded_file($_FILES[$fileName]["tmp_name"], $target_file)) {
			        // echo "The file ". basename( $_FILES[$fileName]["name"]). " has been uploaded.<br>";
			    } else {
			        // echo "Sorry, there was an error uploading your file.";
			    }
			}
			$sql = "INSERT INTO `admission_files` (`file_ID`, `file_Name`, `admission_ID`,`req_ID`) VALUES ('', '$target_fileName', '$admission_ID','$req_ID');";
					if (mysqli_query($con,$sql) ) {
				    	$zz = 1;
				    }
				    else{
				    	$zz = 0;
				    	echo "Error".mysqli_error($con);
				    }
		}
		else{

		}




}

echo "<pre>";
print_r($_FILES);
echo "</pre>";

		
multi_file_upload($con,"rcard",1);
multi_file_upload($con,"bcert",2);
multi_file_upload($con,"pic1x1",3);
multi_file_upload($con,"gmoralcert",4);
multi_file_upload($con,"brgyclrnc",5);
multi_file_upload($con,"financial",6);
	$sql  = "UPDATE `admission` SET `admission_Status` = '2' WHERE `admission`.`admission_ID` = '$admission_ID';";
	if (mysqli_query($con,$sql) ) {
	
		echo "<script>alert('Success Document Upload.');
											window.location='index.php';
										</script>";
		
	}
	
	
	}






?>
