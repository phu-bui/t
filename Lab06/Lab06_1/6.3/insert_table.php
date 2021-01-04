<?php
$servername = "127.0.0.1";
$username = "root";
$password = "1111";
$mydb = "mydb";
$table_name = "products";
// Create connection
$connect = mysqli_connect($servername, $username, $password);

// Check connection
if (!$connect) {
    die("Connection failed: <br>" . mysqli_connect_error());
}else{
    $connect->select_db($mydb);
    $description = $_POST["description"];
    $weight = $_POST["weight"];
    $cost = $_POST["cost"];
    $number = $_POST["number"];

    $sqlq = "INSERT INTO products (Product_desc,Cost,Weight,Numb) VALUES ('$description',$cost,$weight,$number)";
    if($connect->query($sqlq)){
        echo "New records created successfully<br>";
    }else{
        echo "Error: " . $sqlq . "<br>" . $connect->error. "<br>";
    }
}

?>