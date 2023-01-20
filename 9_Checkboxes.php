<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="9_Checkboxes.php" method="post">
        <h2> Select your favorite fruits </h2>
        Apple : <input type="checkbox" name="fruits[]" value="Apple"><br>
        Mango : <input type="checkbox" name="fruits[]" value="Mango"><br>
        Bananna : <input type="checkbox" name="fruits[]" value="Bananna"><br>
        Watermelon : <input type="checkbox" name="fruits[]" value="Watermelon"><br>
        Orange: <input type="checkbox" name="fruits[]" value="Orange"><br>
        Kiwi : <input type="checkbox" name="fruits[]" value="Kiwi"><br><br>

        <input type="submit">
    </form>

    <?php
        $fruits = $_POST["fruits"];

        echo "<br>Total Selected Fruits : ";
        echo count($fruits);
        echo "<br><br>"; 
        echo $fruits[2];
        echo "<br><br>";
        echo $fruits[3];

    ?>
    
</body>
</html>