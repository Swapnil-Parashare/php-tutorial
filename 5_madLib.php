<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="madLib.php" method="get">

        Color : <input type="text" name="color"><br><br>
        Plural Noun : <input type="text" name="plural"><br><br>
        Celebrity : <input type="text" name="celeb"><br><br>

        <input type="submit"><br><br>
    </form>

    <?php


        $color  = $_GET["color"];
        $plural = $_GET["plural"];
        $celeb  = $_GET["celeb"];

        echo "Roses are $color. <br> ";
        echo "$plural are blue. <br>";
        echo "I love $celeb. <br>";
    ?>
    
</body>
</html>

<!-- Color, Plural Noun, Celebrity. -->