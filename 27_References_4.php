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
        $i =& $ref;

        $array = [1,2,3,4,5];

        foreach($array as $i)
        {
            echo $i*$i ;
            echo "<br>";
        }

        echo "Current i = $i <br>
              Current ref = $ref";
    ?>
</body>
</html>