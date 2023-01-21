<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        function square($num)
        {
            $num = $num * $num;

            echo "<br>Square : $num<br>";
        }


        echo "<br><h3>Pass by Value</h3><br>";
        $num1 = 21;
        echo "Initial Value : $num1";
        square($num1);
        echo "$num1 : As you can see value is not modified outside the function.<br>";





        function square_reference(&$num)
        {
            $num = $num * $num;

            echo "<br>Square : $num<br>";
        }

        echo "<br><h3>Pass by Reference</h3><br>";
        $num2 = 11;
        echo "Initial Value : $num2";
        square_reference($num2);  
        echo "$num2 : As you can see value is modified outside the function.<br>";
    ?>

</body>
</html>