<?php
$to = "asombero23@gmail.com , rhalpdarrencabrera@gmail.com";
$subject = "Your Enrollment Registration Approve";

$message = "
<html>
<head>
<title>Your Enrollment Registration Approve</title>
</head>
<body>


</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <greengateannex@gmail.com>' . "\r\n";
// $headers .= 'Cc: myboss@example.com' . "\r\n";

mail($to,$subject,$message,$headers);
?>