<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="post.php" method="post">
        Password : <input type="password" name="password"><br><br>

        <input type="submit">
    </form>

    <?php
        $password = $_POST["password"];    // Here we are getting value from url parameter.

        echo "<br>Password enter by user : $password";
    ?>

</body>
</html>