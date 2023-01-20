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

        $friends = array("Atharva", 1, "Mayur", true, "Hrishikesh", "Eeshan" );
        $friends[11] = "Vijay";
        echo "$friends[1] <br>";
        echo "$friends[2] <br>";
        echo "$friends[3] <br>";

        echo count($friends);
    ?>
    
</body>
</html>