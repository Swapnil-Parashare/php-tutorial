<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php                                     // Dynamically setting the values of variables.
        $title = "NO ESCAPE";
        $author = "Swapnil Parashare";
        $wordCount = 250;
        include "article_header.php";
    ?>
    <br><br>

    <?php                                    // Accessing the variables and functions present in the file.
        include "useful-tools.php";
        echo $privateKey;
        sayHi("Swapnil");
    ?>
</body>
</html>