<html>

<head>
    <title>Business List</title>
</head>

<body>
<?php
$servername = "127.0.0.1";
$username = "root";
$password = "1111";
$mydb = "mydb";
$table_name = "Category";
// Create connection
$connect = mysqli_connect($servername, $username, $password);

// Check connection
if (!$connect) {
    die("Connection failed: <br>" . mysqli_connect_error());
} else {
    print("Connection success!!<br>");
}
$connect->select_db($mydb);
?>

<h1>Business Listings</h1>

<div style="float:left; width:30%">
    <table border="1px">
        <tr>
            <th>Click on a category to find business listings</th>
        </tr>

        <?php


        $SQLcmd = "SELECT * FROM $table_name";
        $result = mysqli_query($connect, $SQLcmd);

        if ($result) {
            while ($row = $result->fetch_assoc()) {
                $link = "Business_list.php?cat_id={$row["Category_ID"]}";
                print("<tr><td><a href='$link'>" . $row["Title"] . "</a></td></tr>");
            }
        } else {
            print("Result empty <br>");
        }



        ?>
    </table>
</div>
<div>
    <table border="1px">
        <?php
        if (array_key_exists("cat_id", $_GET)) {
            $cat_id = $_GET["cat_id"];
            $query = "SELECT * FROM Businesses JOIN biz_categories ON Businesses.Businesses_ID = biz_categories.Buginesses_ID                        WHERE biz_categories.Category_ID = '$cat_id'";
            $result = $connect->query($query);
            if ($result) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row['Businesses_ID'] . "</td>";
                    echo "<td>" . $row['Business_name'] . "</td>";
                    echo "<td>" . $row['Address'] . "</td>";
                    echo "<td>" . $row['City'] . "</td>";
                    echo "<td>" . $row['Telephone'] . "</td>";
                    echo "<td>" . $row['Url'] . "</td>";
                    echo "</tr>";
                }
            }
        }
        ?>
    </table>
</div>
</body>

</html>