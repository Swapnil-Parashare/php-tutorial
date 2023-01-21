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
        $x = "cat";
        $$x = "dog";
        $$$x = "monkey";

        echo "<br><br>\$x     : "; echo $x;

        echo "<br><br>\$\$x   : "; echo $$x;  echo "&nbsp&nbsp&nbsp \$cat : $cat";
        echo "<br><br>\$\$\$x : "; echo $$$x; echo "&nbsp&nbsp&nbsp \$\$cat : "; echo $$cat; echo "&nbsp&nbsp&nbsp \$dog : $dog";
    ?>
</body>
</html>