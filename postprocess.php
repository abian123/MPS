<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <title>PHP Example</title>
</head>

<body>
<?php
$to = "andrew.g.bian@gmail.com";
$nameSubmitted = $_POST['name'];
$message = $_POST['message'];

$headers =  'MIME-Version: 1.0' . "\r\n";
$headers .= 'From: Your name <info@address.com>' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

mail($to, $subject, $body, $headers);

mail($to, $nameSubmitted, $message, $From);

?>
</body>
</html>