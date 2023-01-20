<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="15_Ternary.php" method="post">
        First Number : <input type="number" name="num1"><br><br>
        Second Number : <input type="number" name="num2"><br><br>
        Third Number : <input type="number" name="num3"><br><br>

        <input type="submit">
    </form>

    <?php
        $num1=$_POST["num1"];
        $num2=$_POST["num2"];
        $num3=$_POST["num3"];


        function getMax($num1,$num2,$num3)
        {
            $temp = $num1 > $num2 ? $num1 : $num2;
            return $temp > $num3 ? $temp : $num3;
        }

        $maximum = getMax($num1,$num2,$num3);

        echo "<br>Maximum Number : $maximum";
    ?>


</body>
</html>