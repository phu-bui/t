<html>
<head><title>Carpet Cost Quote</title></head>
<body>
<font size="5" color="blue">Your Estimated Carpet Costs</font>
<?php
function carpet_cost($width, $length, $grade, &$carpet_cost){
    if($width > 0 && $length > 0){
        if($grade == 1){
            $carpet_cost = $width * $length * 4.99;
            return 1;
        }elseif ($grade == 2){
            $carpet_cost = $width * $length *3.99;
            return 1;
        }else{
            echo "Unknown carpet grade = $grade";
            return 0;
        }
    }else{
        return 0;
    }
}
$width = $_POST["width"];
$length = $_POST["length"];
$grade = $_POST["grade"];
$carpet_cost = 0;
$install_cost = 0;
$ret = carpet_cost($width, $length, $grade, $carpet_cost);
if($ret){
    $room_size = $width *$length;
    $total_cost = $carpet_cost + ($carpet_cost * 0.5);
    echo "<br>Total square feet = $room_size";
    echo "<br>Carpet grade = $grade";
    echo "<br>Carpet cost = \$$carpet_cost";
    echo "<br>Total cost estimate (installed) = \$$total_cost";
} else echo "Illegal value received";
?>
</body>
</html>