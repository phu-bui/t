<html>
<head><tile>Our Shop</tile></head>
<body>
<font size="4" color="blue">
    <?php
    $today = date('l, F d, Y');
    echo "Welcome on $today to our huge blowout sale! </font>";
    $month = date('m');
    $year = date('Y');
    $dayofyear = date('z');
    if ($month == 12 && $year == 2001){
        $daysleft = 365 - $dayofyear + 10;
        echo "<br>There are $daysleft sales days left";
    }elseif ($month == 01 && $year == 2002){
        if($dayofyear <= 10) {
            $daysleft = 10 - $dayofyear;
            echo "<br>There are $daysleft sales days left";
        }else{
            echo "<br>Sorry, our sale is over.";
        }
    } else {
        echo "<br>Sorry, our sale is over.";
    }
    echo "<br>Our sale ends Janurary January 10, 2002";
    ?>
</font>
</body>
</html>