<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="urlParams.php"  method="get">
        Name : <input type="text" name="username"><br><br>

        <input type="submit">
    </form>

    <?php
        $name = $_GET["username"];
        echo "<br><br> My name is $name";
    ?>

</body>
</html>