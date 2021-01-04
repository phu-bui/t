<?php
$link = mysqli_connect("127.0.0.1", "root", "1111");

if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL ."<br>";
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL ."<br>";
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL ."<br>";
    exit;
}
echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;
mysqli_close($link);
?>