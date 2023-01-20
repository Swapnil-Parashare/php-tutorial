<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    Calculator<br><br>
    

    <form action="16_Calculator.php" method="post">

        First Number : <input type="number" name="num1"><br><br>
        Second Number : <input type="number" name="num2"><br><br>

        Addition <input type="radio" name="operation" value=1><br><br>
        Substraction <input type="radio" name="operation" value=2><br><br>
        Multiplication <input type="radio" name="operation" value=3><br><br>
        Division <input type="radio" name="operation" value=4><br><br>

        <input type="submit">
    </form>

    <?php

        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $operation = $_POST["operation"];

        function solve($num1,$num2,$operation)
        {

            switch($operation)
            {
                case 1 :
                {
                    return $num1 + $num2;
                    break;
                }
                case 2 :
                {
                    return $num1 - $num2;
                    break;
                }
                case 3 :
                {
                    return $num1 * $num2;
                    break;
                }
                case 4 :
                {
                    return $num1 / $num2;
                    break;
                }
            }

        }

        $answer = solve($num1,$num2,$operation);

        echo "<br><br>Answer : $answer";

    ?>

</body>
</html>