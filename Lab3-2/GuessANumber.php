<html>
<head><title>GuessANumber</title></head>
<body>
<?php
srand ((double) microtime() * 10000000);
$r_number = rand(0, 99);
?>
<font size="5" color="blue">Guess a number</font><br>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get'">
    <table>
        <tr>
            <td>Input Number:</td>
            <td><input type="text" size="10" name="number"></td>
        </tr>
        <tr>
            <td align="right"><input type="submit" value="Submit"/></td>
            <td align="left"><input type="reset" value="Reset"></td>
        </tr>
    </table>
    <table>
        <?php
        if(array_key_exists("number", $_GET)) {
            $number = $_GET["number"];
            if (!is_numeric($number)) {
                echo "You must enter a number!";
            } else {
                echo "You input $number<br>";
                if ($number < $r_number) {
                    echo "Wrong. Please try a higher number. You have guessed 1 time!.";
                } elseif ($number > $r_number) {
                    echo "Wrong. Please try a lower number. You have guessed 1 time!.";
                } else {
                    echo "congratulation! You right!! Number is $r_number";
                }
            }
        }
        ?>
    </table>
</form>
</body>
</html>