<html><head><title>Table Output</title></head>
<body>
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
}
print '<font size="5" color="blue">';
print "$table_name Data</font><br>";
$query = "SELECT * FROM $table_name";
print "The query is <i>$query </i><br>";
$connect->select_db($mydb);
$results_id = $connect->query($query);
if ($results_id->num_rows > 0) {
    print '<table border=1>';
    print '<th>Num<th>Product<th>Cost<th>Weight<th>Count';

    while ($row = $results_id->fetch_assoc()){
        print '<tr>';
        foreach ($row as $field) {
            print "<td>$field</td> ";
        }
        print '</tr>';
    }
} else {
    die ("Query=$query failed!");
}
mysqli_close($connect);
?>
</table>
</body>
</html>