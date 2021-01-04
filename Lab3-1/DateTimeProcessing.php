<html>
    <head><title>Date Time Processing</title></head>
    <body>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
        <?php
            if(array_key_exists("name", $_GET)){
                $name = $_GET['name'];
                $day = $_GET['day'];
                $month = $_GET['month'];
                $year = $_GET['year'];
                $hour = $_GET['hour'];
                $minute = $_GET['minute'];
                $second = $_GET['second'];
            }
            else{
                $name = "";
                $day = 0;
                $month = 0;
                $year = 0;
                $hour = 0;
                $minute = 0;
                $second = 0;
            }
        ?>
        <table>
            <tr>
                <td>Your name:</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>Date: </td>
                <td><select name="day">
                        <?php
                            for($i=1; $i<=31; $i++){
                                if($day == $i){
                                    print("<option selected>$i</option>");
                                }
                                else {
                                    print("<option>$i</option>");
                                }
                            }
                        ?>
                    </select></td>
                <td>Month: </td>
                <td><select name="month">
                        <?php
                            for($i=1; $i<=12; $i++){
                                if($month == $i){
                                    print("<option selected>$i</option>");
                                }
                                else {
                                    print("<option>$i</option>");
                                }
                            }
                        ?>
                    </select></td>
                <td>Year: </td>
                <td><select name="year">
                        <?php
                            for($i=1890; $i<=2100 ; $i++){
                                if($year == $i) {
                                    print("<option selected>$i</option>");
                                }
                                else{
                                    print("<option>$i</option>");
                                }
                            }
                        ?>
                    </select></td>
            </tr>
            <tr>
                <td>Time: </td>
                <td><select name="hour">
                        <?php
                            for($i = 0; $i<=23; $i++){
                                if($hour == $i){
                                    print("<option selected>$i</option>");
                                }
                                else {
                                    print("<option>$i</option>");
                                }
                            }
                        ?>
                    </select>Hour</td>
                <td><select name="minute">
                    <?php
                        for($i=0; $i<=59; $i++){
                            if($minute == $i) {
                                print("<option selected>$i</option>");
                            }
                            else{
                                print("<option>$i</option>");
                            }
                        }
                    ?>
                    </select>Minute</td>
                <td><select name="second">
                    <?php
                        for($i=0; $i<=59; $i++){
                            if($second == $i){
                                print("<option selected>$i</option>");
                            }
                            else{
                                print("<option>$i</option>");
                            }
                        }
                    ?>
                    </select>Second</td>
                <td></td>
            </tr>
            <tr>
                <td align="right"><input type="submit" name="submit" value="submit"></td>
                <td align="left"><input type="reset" name="reset" value="reset"></td>
            </tr>
        </table>
    <table>
        <br>
        <?php
        if (array_key_exists("name", $_GET)) {
            echo "Hi $name!<br>";
            echo "You have choose to have an appointment on $hour:$minute:$second, $day/$month/$year<br><br>";
            echo "More information<br><br>";
            if ($hour > 11) {
                $hour2 = $hour - 12;
                $amp = "PM";
            } else {
                $hour2 = $hour;
                $amp = "AM";
            }
            echo "In 12 hours, the time and date is $hour2:$minute:$second $amp, $day/$month/$year<br><br>";
            if ($month == 1 || $month == 3 || $month == 5 || $month == 7 || $month == 8 || $month == 10 || $month == 12) {
                $days = 31;
            } elseif ($month == 2) {
                $days = 28;
            } else {
                $days = 30;
            }
            if ($year % 4 == 0 && ($year % 100 != 0 || $year % 400 == 0) && $month == 2) {
                $days += 1;
            }
            echo "This month has $days days!";
        }
        ?>
    </table>
    </form>
    </body>
</html>
