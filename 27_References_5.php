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
        $a = 11;
        $b = 21;
        $c = 51;

        echo "<br><h3>Before</h3><br>";
        echo "a : $a<br> b : $b<br> c : $c";


        $arr = array(&$a, &$b, &$c);
        $size = count($arr);

        for($i = 0 ; $i < $size ; $i++)
        {
            $arr[$i] += 10;
        }

        echo "<br><h3>After</h3><br>";
        echo "a : $a<br> b : $b<br> c : $c";
    ?>
</body>
</html>