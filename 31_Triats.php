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
        trait Simple
        {
            public function addition($num1,$num2)
            {
                return $num1+$num2;
            }

            public function substraction($num1,$num2)
            {
                return $num1-$num2;
            }
        }

        trait Advance
        {
            public function multiplication($num1,$num2)
            {
                return $num1*$num2;
            }

            public function division($num1,$num2)
            {
                return $num1/$num2;
            }
        }

        class Class1
        {
            use Simple,Advance;
        }

        class Class2
        {
            use Simple;
        }

        $obj1 = new Class1();
        $obj2 = new Class2();

        echo "<br><h3>Object1 using the functionality of both the 'Triats' :- Multiple Inheritance </h3>";

        echo "Addition : " . $obj1->addition(11,51) . "<br> Substraction : " . $obj1->substraction(50,30);
        echo "<br>Multiplication : " . $obj1->multiplication(11,51) . "<br> Division : ". $obj1->division(60,30);

        echo "<br><h3>Object2 using the functionality of the trait used by Object1 :- </h3>";

        echo "Addition : " . $obj2->addition(11,51) . "<br> Substraction : " . $obj2->substraction(50,30);



    ?>
</body>
</html>