<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="input.php" method="get">
        Username : <input type="text" name = "username">
        <br><br>
        Age :      <input type="number" name="age">
        <br><br>
        <input type="submit">

    </form>

    <br><br>

    <h1>
    <?php
         echo $_GET["username"];
         echo " is ";
         echo $_GET["age"];
         echo " years old. ";
     ?>
    </h1>

</body>
</html>