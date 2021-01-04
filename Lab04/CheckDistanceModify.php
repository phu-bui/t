<html>
<head><title>Distance and Time Calculations</title></head>
<body>
<?php
$cities = array('Dallas' => 803, 'Toronto' => 435, 'Boston' => 848, 'Nashville' => 406, 'Las Vegas' => 1526,
    'San Francisco' => 1835, 'Washington, DC' => 595, 'Miami' => 1189, 'Pittsburgh' => 409);
$destination = $_GET["destination"];
if (array($destination)) {
    if(count($destination)>1){
    ?>
            <table>
                <tr>
                    <td>No.</td>
                    <td>Destination</td>
                    <td>Distance</td>
                    <td>Walking time</td>
                </tr>
                <?php
                $count = 0;
                foreach ($destination as $item) {
                    $count++;
                    if (isset($cities[$item])) {
                        $distance = $cities[$item];
                        $time = round($distance / 60, 2);
                        $walktime = round($distance / 5, 2);
                    } else {
                        $distance = "None";
                        $time = "None";
                        $walktime = "None";
                    }
                    print("<tr>");
                    print("<td>$count</td>");
                    print("<td>$distance</td>");
                    print("<td>$time</td>");
                    print("<td>$walktime</td>");
                    print("</tr>");
                }
    print ("</table>");
                }
    else{
        $item = $destination[0];
        if(isset($cities[$item])){
            $distance = $cities[$item];
            $time = round(($distance/60),2);
            $walktime = round(($distance/5), 2);
            print("The distance between Chicago and <I>$item</I> is $distance miles.");
            print("<br>Driving at 60 miles per hour it would take $time hours");
            print("<br>Walking at 5 miles per hour it would  take  $walktime hours");
            print("<br>");

        }
        else{
            print("Sorry, do not have destination information for $destination.");

        }
    }
}
?>
</body>
</html>