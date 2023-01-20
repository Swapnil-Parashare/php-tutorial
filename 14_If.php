<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h3>Gender</h3>
    <form action="14_If.php" method="post">
        Male : <input type="radio" name="isMale" value=1 ><br><br>
        Female : <input type="radio" name="isMale" value=0 ><br><br>
        Age : <input type="number" name="age"><br><br>
        <input type="submit">
    </form>

    <?php

        $isMale = $_POST["isMale"];
        $age = $_POST["age"];

        function hormone($isMale, $age)
        {
            if($isMale && $age >= 18 )
            {
                echo "<br>Your primary hormone is \"Testosterone\"";
                echo "<br>You are an adult.";
            }
            else if($isMale && $age <18)
            {
                echo "<br>Your primary hormone is \"Testosterone\"";
                echo "<br>You are a minor.";
            }
            else if( !$isMale && $age >= 18)
            {
                echo "<br>Your primary hormone is \"Estrogen\"";
                echo "<br>You are an adult.";
            }
            else
            {
                echo "<br>Your primary hormone is \"Estrogen\"";
                echo "<br>You are a minor.";   
            }
        }

        hormone($isMale,$age);
    ?>

</body>
</html>