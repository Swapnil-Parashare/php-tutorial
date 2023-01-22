<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <!-- JS inside PHP code  -->
    <?php
        echo '
            <script type="text/Javascript">
                alert("Javascript inside PHP code");
            </script>
        ';
    ?>

    <!-- JS outside PHP code -->
    <script type="text/Javascript">
                    alert("Javascript outside PHP code");
    </script>

 
    <!-- DOM manipulation using JS -->

    <?php
        echo "<div id='demo' ></div>";
    ?>

    <script type="text/Javascript">

        
        let myFunction = (a, b) =>
        {
            return a * b;             
        }
        var x = myFunction(11, 10);   
        
        document.getElementById("demo").innerHTML = x;
        

    </script>



</body>
</html>