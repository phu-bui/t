<html>

<head>
    <title>Date Time Func</title>
</head>

<body>
<?php
function processDate($day_1, $day_2)
{
    $day1 = DateTime::createFromFormat('Y-m-d', $day_1);
    $day2 = DateTime::createFromFormat('Y-m-d', $day_2);
    $mess1 = $day1->format('l, F, Y');
    $mess2 = $day2->format('l, F, Y');
    echo "Display date: <br>";
    echo "$mess1 <br>";
    echo "$mess2 <br>";

    $different = date_diff($day1, $day2);
    $diff = $different->format("%R%a days");
    echo "Different between : $diff <br>";
    $today = new DateTime('today');

    $year_old_1 = date_diff($day1, $today);
    $year_old_2 = date_diff($day2, $today);

    if (((int)($year_old_1->format("%R%a"))) >= 0 && ((int)($year_old_2->format("%R%a"))) >= 0) {
        $age_1 = $year_old_1->format("%Y");
        $age_2 = $year_old_2->format("%Y");
        $diff_age = abs($age_1 - $age_2);
        echo "Age of person 1 is $age_1 <br>";
        echo "Age of person 2 is $age_2 <br>";
        echo "Different age: $diff_age <br>";
    } else {
        echo "Your inserted day is so far <br>";
    }

}

?>
<form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="GET">
    Enter user 1 birth day: <input type="date" id="birthday1" name="birthday1"><br>
    Enter user 2 birth day: <input type="date" id="birthday2" name="birthday2"><br>
    <input type="submit" value="Submit">
    <input type="reset" value="Reset"><br>
</form>
<?php
if (array_key_exists("birthday1", $_GET) && array_key_exists("birthday2", $_GET)) {

    $day_1 = $_GET["birthday1"];
    $day_2 = $_GET["birthday2"];
    processDate($day_1, $day_2);
}

?>
</body>

</html>