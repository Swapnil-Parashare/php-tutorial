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
    echo "<h2> Associative Arrays <h2>";

    $record = array("Swapnil" => 21, "Mayur" => 24, "Atharva" => 23, "Shweta" => 25);
    echo "<br><br>Swapnil : ";
    echo $record["Swapnil"];

    echo "<br><br> Total Number of Students : ";
    echo count($record);

    ?>
</body>
</html>