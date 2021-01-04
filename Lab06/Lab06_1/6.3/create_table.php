<html><head><title>Create Table</title></head><body>
 <?php
 $server = '127.0.0.1';
 $user = 'root';
 $pass = '1111';
 $mydb = 'mydb';
 $table_name = 'Products';
 $connect = mysqli_connect($server, $user, $pass, $mydb);
 if (!$connect) {
     die ("Cannot connect to $server using $user");
 } else {
     $SQLcmd = "CREATE TABLE $table_name(
    ProductID INT UNSIGNED NOT NULL
    AUTO_INCREMENT PRIMARY KEY,
    Product_desc VARCHAR(50),
    Cost INT,
    Weight INT,
    Numb INT)";
    mysqli_select_db($mydb);
 if (mysqli_query($SQLcmd, $connect)){
         print '<font size="4" color="blue" >Created Table';
 print "<i>$table_name</i> in sdatabase<i>$mydb</i><br></font>";
 print "<br>SQLcmd=$SQLcmd";
 } else {
         die ("Table Create Creation Failed SQLcmd=$SQLcmd");
 }
 mysqli_close($connect);
 }
 ?></body></html>