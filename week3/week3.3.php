<html>
<head>
    <title>
    </title>
</head>
<body>
<?php
    $value = $_POST["value"];
    $money = $_POST["money"];
    $kq = rand(0,99);
    print("Ket qua sinh ngau nhien la: $kq");
    if($value==$kq){
        $money=$money*80;
    print("Ban nhan duoc so tien la: $money");
    }
    else {
        $money = $money;
        print("Ban da mat so tien la: $money");
    }
?>
<form action="week3.3.html">
<input type="submit" value="Cancel">
</form>
</body>
</html>
<!--0947733086-->