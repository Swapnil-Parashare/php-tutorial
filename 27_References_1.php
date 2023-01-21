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

    $name1 = "Swapnil";
    $name2 = &$name1;

    echo "<br>name1 : $name1 <br> name2 : $name2 <br>";

    echo "<br> Modification done using 'name2'<br>";
    $name2 = "Atharva";

    echo "<br>name1 : $name1 <br> name2 : $name2 <br>";

    echo "<br>As you can see values of both the variables are modified";

    ?>
</body>
</html>