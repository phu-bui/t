<?php
$servername = "127.0.0.1";
$username = "root";
$password = "phubuibk";
$mydb = "lec62";
$table_name = "People";
// Create connection
$connect = mysqli_connect($servername, $username, $password);

// Check connection
if (!$connect) {
    die("Connection failed: <br>" . mysqli_connect_error());
}else{
    $connect->select_db($mydb);
    $recipient = $_POST['recipient'];
    $sqlq = "SELECT PersonID FROM People WHERE Username=$recipient";
    $rs = $mydb->executeQuery($sqlq);
    if($connect->query($sqlq)){
        echo "New records created successfully<br>";
    }else{
        echo "Error: " . $sqlq . "<br>" . $connect->error. "<br>";
    }
}

?>