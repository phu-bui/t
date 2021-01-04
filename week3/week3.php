<html>
<body>

Welcome <?php echo $_POST["name"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?>
<br>
<?php
    $name = $_POST["name"];
    $email = $_POST["email"];
    print("name is $name");
    print("email is $email");
?>
</body>
</html>