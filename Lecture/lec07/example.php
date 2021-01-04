<html>
<head><title>Decsions</title></head>
<body>
<?php
    $date = '12/22/2020';
    $two = '[[:digit::]]{2}';
    $month = '[0-3][[:digit:]]';
    $day = '[0-3][:digit:]]';
    $year = '2[[:digit:]]$two';
    if(mb_ereg("^($month)/($day)/($year)$", $date)){
        print("Got valid date = $date <br>");
    }
    else{
        print("Invalid date = $date");

    }
?>
</body>
</html>