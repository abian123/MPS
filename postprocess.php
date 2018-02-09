<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <title>PHP Example</title>
</head>

<body>
<?php
$to = "andrew.g.bian@gmail.com";
$emailAdd = $_POST['email'];
$nameSubmitted = $_Post['name'];

$message = $_Post['message'];

mail($to,$nameSubmitted,$message, $emailAdd);

?>
</body>
</html>
