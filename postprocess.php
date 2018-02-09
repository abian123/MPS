<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <title>PHP Example</title>
</head>

<body>
    
<?php
require 'PHPMailerAutoload.php';
$mail = new PHPMailer;

$to = "andrew.g.bian@gmail.com";
$emailAdd = $_POST['email'];
$nameSubmitted = $_POST['name'];

$message = $_POST['message'];

mail($to,$nameSubmitted,$message, $emailAdd);

?>
</body>
</html>
