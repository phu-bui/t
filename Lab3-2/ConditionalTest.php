<html>
<head><title>Conditional Test</title></head>
<body>
<?php
$first = $_GET["firstName"];
$middle = $_GET["middleName"];
$last = $_GET["lastName"];
echo "Hi $first! Your full name is $last $middle $first. <br><br>";
if ($first == $last) {
    echo "$first and $last are equal";
}
if ($first < $last) {
    echo "$first is less than $last";
}
if ($first > $last) {
    echo "$first is greater than $last";
}
echo "<br><br>";
$grade1 = $_GET["grade1"];
$grade2 = $_GET["grade2"];
$final = (2 * $grade1 + 3 * $grade2) / 5;
if ($final > 89) {
    echo "Your final grade is $final. You got an A. Congratulation";
    $rate = "A";
} elseif ($final > 79) {
    echo "Your final grade is $final. You got a B";
    $rate = "B";
} elseif ($final > 69) {
    echo "Your final grade is $final. You got a C";
    $rate = "C";
} elseif ($final > 59) {
    echo "Your final grade is $final. You got a D";
    $rate = "D";
} elseif ($final > 39) {
    echo "Your final grade is $final. You got a E";
    $rate = "E";
}elseif ($final >= 0) {
    echo "Your final grade is $final. You got a F";
    $rate = "F";
} else {
    echo "Illegal grade less than 0. Final grade = $final";
    $rate = "Illegal";
}
echo "<br><br>";
switch($rate){
    case "A": echo "Excellent!"; break;
    case "B": echo "Good!"; break;
    case "C": echo "Not bad!"; break;
    case "D": echo "Normal!"; break;
    case "E": echo "Noob!"; break;
    case "F": echo "You have to try again!"; break;
    default: echo "Illegal grade!";
}
?>
</body>
</html>