<html>
<head><title>Date Check</title></head>
<body>
<?php
$date = $_POST['date'];
$two = '[[:digit:]]{2}';
$month = '[0-1][[:digit:]]';
$day = '[0-3][[:digit:]]';
$year = '2[[:digit:]]$two';
if(mb_ereg("^($month)/($day)/($year)$", $date)) {
    list($month, $day, $year) = mb_split('/', $date);
    if ($month >= 1 && $month <= 12) {
        if ($day >= 1 && $day <= 31) {
            print("Valid date month = $month day = $day year = $year");
        } else {
            print("Illegal day specifed Day = $day");
        }
    } else {
        print("Illegal month specifed Month = $month");
    }
}
else{
    print("Invalid date format = $date");
}
?>
</body>
</html>