<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="12_function.php" method="post">
        Enter Name : <input type="text" name="username"><br><br>
        Enter Age : <input type="number" name="age"><br><br>
        <input type="submit">
    </form>

    <?php

        function sayHi()
        {
            echo "<br>Hello!!!";
        }
        
        sayHi();

        $username = $_POST["username"];


        function welcome($username, $age)
        {
            echo "<br>Welcome $username !!!";
            echo "<br>You are $age years old.";
        }

        welcome($username,$_POST["age"]);

    ?>

</body>
</html>