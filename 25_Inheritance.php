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

        class Chef
        {
            function makeSizzler()
            {
                echo "Chef makes Sizzlers! <br>";
            }
            function makeSalad()
            {
                echo "Chef makes Salad! <br>";
            }
            function makeSpecialDish()
            {
                echo "Chef makes Cheese Balls! <br>";
            }
        }

        class IndianChef extends Chef
        {
            function makeMisal()
            {
                echo "Chef makes Misal !!!<br>" ;
            }

            function makeSpecialDish()            // Method Overiding.
            {
                echo "Chef makes Puran-Poli !!!<br>" ;
            }
        }

        echo "Normal Chef<br>";
        $chef = new Chef();
        $chef->makeSalad();
        $chef->makeSpecialDish();

        echo "<br>Indian Chef<br>";
        $indianChef = new IndianChef();
        $indianChef->makeSalad();
        $indianChef->makeMisal();
        $indianChef->makeSpecialDish();

    ?>
</body>
</html>