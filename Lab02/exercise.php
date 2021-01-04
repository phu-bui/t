<html>
<head><title>Student Info</title></head>
<body>
<?php
    $name = $_POST["name"];
    $class = $_POST["class"];
    $university = $_POST["university"];
    $cpa = $_POST["cpa"];
    $hobby = $_POST["hobby"];
    echo "Hello, $name<br>";
    echo "You are studying at $class, $university<br>";
    echo "CPA: $cpa<br>";
    echo "Your hobby: <br>";
    $i = 1;
    foreach ($hobby as $hb){
        echo $i++ . '.' . "$hb". '<br>';
    }
?>
</body>
</html>