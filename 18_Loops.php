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

        echo "While Loop <br><br>";
        $index = 1;
        while($index < 6)
        {
            echo "$index <br>";
            $index++;
        }

        echo "<br> For Loop <br><br>";

        for($i = 1 ; $i <= 5 ; $i++)
        {
            echo "$i <br>";
        }  

        echo "<br> Iterating over an Array using For loop <br><br>";

        $luckyNumbers = array(11,21,51,111,121,151,211,251,501);

        $size = count($luckyNumbers);

        for($i = 0 ; $i < $size ; $i++)
        {
            echo "$luckyNumbers[$i] </t>";
        }

        /*
        echo "Comment it down";
        echo "Multiline comment";
        */

    ?>
</body>
</html>