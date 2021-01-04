<?php
$connect = mysql_connect($server, $user, $pass);
 if ( !$connect ) {
 die ("Cannot connect to $server using $user");
 }
 else {
     mysql_select_db('MyDatabaseName');
    $SQLcmd = 'CREATE TABLE Products(
        ProductID INT UNSIGNED NOT NULL
        AUTO_INCREMENT PRIMARY KEY,
        Product_desc VARCHAR(50), Cost INT, Weight INT, Numb INT)';
 mysql_query($SQLcmd, $connect);
 mysql_close($connect);
 }
?>