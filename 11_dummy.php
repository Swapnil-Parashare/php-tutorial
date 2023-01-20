<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="11_dummy.php" method="post">

        Enter your name : <input type="text" name="username">

        <input type="submit">

    </form>

    <?php

        $record = array("Swapnil" => 21, "Mayur" => 24, "Atharva" => 23, "Shweta" => 25);

        $username = $_POST["username"];

        echo "Marks : ";
        echo $record[$username];
    ?>
</body>
</html>