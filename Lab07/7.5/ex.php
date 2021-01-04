<html>
<head>
    <meta charset="UTF-8">
    <title>Exercise</title>
</head>
<body>
<?php
$email = $_POST["email"];
$url = $_POST["url"];
$phone = $_POST["phone"];

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    print "Invalid email format<br>";
}else{
    print "Valid Email<br>";
}


if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$url)) {
    print "Invalid URL<br>";
}else{
    print "Valid URL<br>";
}

if(!preg_match('/^[0-9]{10}+$/', $phone)){
    print "Invalid phone<br>";
}else{
    print "Valid Phone<br>";
}
?>
</body>
</html>