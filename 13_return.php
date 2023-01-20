<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="13_return.php" method="post" >
        Enter a Number <input type="number" name="num">
        <input type="submit">
    </form>

    <?php

        $num = $_POST["num"];
        
        function cube($num)
        {
            return $num*$num*$num;
        }

        $ans = cube($num);

        echo "<br>Cube : $ans" ;
    ?>
</body>
</html>