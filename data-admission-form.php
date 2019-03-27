<?php 
include('dbconfig.php');
  $fname;
  $mname;
  $lname;
  $schl;
  $bday;
  $mobilenum;
  $email;
  $gender;
  $citizenship;
  $captcha;

  $fname = filter_input(INPUT_POST, 'fname', FILTER_VALIDATE_EMAIL);
  $mname = filter_input(INPUT_POST, 'mname', FILTER_SANITIZE_STRING);
  $lname = filter_input(INPUT_POST, 'lname', FILTER_VALIDATE_EMAIL);
  $schl = filter_input(INPUT_POST, 'schl', FILTER_SANITIZE_STRING);
  $bday = filter_input(INPUT_POST, 'bday', FILTER_VALIDATE_EMAIL);
  $mobilenum = filter_input(INPUT_POST, 'mobilenum', FILTER_VALIDATE_EMAIL);
  $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
  $gender = filter_input(INPUT_POST, 'gender', FILTER_VALIDATE_EMAIL);
  $citizenship = filter_input(INPUT_POST, 'citizenship', FILTER_VALIDATE_EMAIL);
  $captcha = filter_input(INPUT_POST, 'token', FILTER_SANITIZE_STRING);
  if(!$captcha){
    echo '<h2>Please check the the captcha form.</h2>';
    exit;
  }
  $secretKey = "6LeD65kUAAAAAIa99yxjW-om7r-6qtTOu6KYF9UX";
  $ip = $_SERVER['REMOTE_ADDR'];

  // post request to server
  $url = 'https://www.google.com/recaptcha/api/siteverify';
  $data = array('secret' => $secretKey, 'response' => $captcha);

  $options = array(
    'http' => array(
      'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
      'method'  => 'POST',
      'content' => http_build_query($data)
    )
  );
  $context  = stream_context_create($options);
  $response = file_get_contents($url, false, $context);
  $responseKeys = json_decode($response,true);
  header('Content-type: application/json');
  if($responseKeys["success"]) {

    $success_fname = $_POST['fname'];
    $success_mname = $_POST['mname'];
    $success_lname = $_POST['lname'];
    $success_schl = $_POST['schl'];
    $success_bday = $_POST['bday'];
    $success_mobilenum = $_POST['mobilenum'];
    $success_gender = $_POST['gender'];
    $success_citizenship = $_POST['citizenship'];
    $sql = "INSERT INTO `admission` (`admission_ID`, `admission_FName`, `admission_MName`, `admission_LName`, `admission_LSch`, `admission_Bday`, `admission_MNum`, `sex_ID`, `admission_Ctzen`,`admission_Date`,`admission_Email`) VALUES (NULL, '$success_fname', '$success_mname', '$success_lname', '$success_schl', '$success_bday', '$success_mobilenum', '$success_gender', '$success_citizenship',CURRENT_TIMESTAMP,'$email');";
    if (mysqli_query($con, $sql)) {
        echo json_encode(array('success' => 'true'));
    } else {
        echo json_encode(array('success' => 'false'));
    }
    
  } else {
    echo json_encode(array('success' => 'false'));
  }
?>

