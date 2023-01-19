<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>
<body>
    

        <?php 
         $name = "Swapnil";
         echo strtoupper($name) ;
         echo "<br>";
         echo strtolower($name);
         echo "<br>";
         echo strlen($name);
         echo "<br>";
         echo $name[3];
         echo "<br>";
         echo "Swapnil"[3] ;
         $name[3] = "x";
         echo "<br>";
         echo $name[3];
         echo "<br>";

         $company = "geeks for geeks";
         echo str_replace("geeks","Engineers", $company );
         echo "<br>";
         echo $company;
         echo "<br>";

         echo substr($company,3,7);


        ?>

</body>
</html>