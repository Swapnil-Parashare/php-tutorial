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

        //Case Sensitive Constant (By Default).
        define("Password1","Swapnil@123");
        echo Password1;

        
        echo "<br><br>";
        $dummyPass = "swaPnIL@123";
        $flag = (Password1 == $dummyPass) ? 1 : 0;
        echo $flag;
        echo " :- Case Sensitive by default<br><br>";
        

        
        // Produce warning.
        define("Password2","Atharva@123",true);
        /*
        PHP 8.0 onwards :- 1] Only 'false' value is accepted as 3rd Argument.
                           2] Its means Constant are "Case-Sensitive" only. i.e the default behaviour.
        */

        
        
    ?>
</body>
</html>