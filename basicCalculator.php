<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="basicCalculator.php" method = "get">

        Number1 : <input type="number" name="num1"> <br><br>
        Number2 : <input type="number" name="num2"> <br><br>

        <input type="submit">
    </form>

    <?php
        $answer =  $_GET["num1"] + $_GET["num2"];
        echo "<br>Addition : $answer";

    ?>
</body>
</html>