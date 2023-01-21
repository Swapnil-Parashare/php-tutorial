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

        // Multidimensional Array : Exactly same as C++ (Accessing and stuff).
        $cars = array (
            array("Volvo",22,18),
            array("BMW",15,13),
            array("Saab",5,2),
            array("Land Rover",17,15)
          );
    ?>
    
</body>
</html>