<?php 
include('../dbconfig.php');
include('../data-md5.php');
session_start();
$user_ID = $_SESSION['login_id'];


$oldpassword = $_POST['oldpassword'];
$newpassword = $_POST['newpassword'];
$newpasswordconfirm = $_POST['newpasswordconfirm'];


echo $encrypted = encryptIt($oldpassword);


$sql = "SELECT user_Pass FROM user_accounts WHERE user_ID = $user_ID";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        
        echo $chk_oldpass = $row["user_Pass"];
    }
} 
else {

  
}

if ($chk_oldpass == $encrypted) {
	
	if ($newpassword == $newpasswordconfirm) {

	
		
		$newpassword = encryptIt($newpassword);
		
		$sql = "UPDATE `user_accounts` SET `user_Pass` = '$newpassword' WHERE `user_accounts`.`user_ID` = $user_ID ;";
				
		
		if (mysqli_query($con, $sql)) {
		    echo "Password Successfully Change";
		} else {
		    echo "Error updating record: " . mysqli_error($con);
		}

	}
	else{
		echo "New Password Not Match";
	}
}
else{
	echo "Old Password Not Match";
}






	






?>