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
        class Student                   // Class
        {
            var $name;             // Data Members
            var $major;
            var $gpa;

    

            function __construct($name,$major,$gpa)            // Parametirzed constructor. (It can also be non parameterized, as in C++)
            {
                $this->name = $name;
                $this->major = $major;
                $this->gpa = $gpa;
            }

            function data()                                    // Member Function.
            {
                echo "<h3>Displaying Data of Current Object :-</h3><br>";

                echo "Name : $this->name <br><br>";
                echo "Major : $this->major <br><br>";
                echo "GPA : $this->gpa <br><br>";

            }

            function isEligible()
            {
                return $this->gpa > 8.5 ? true : false;
            }
        }

        $student1 = new Student("Swapnil Parashare", "Blockchain",9.8);            // Object 
        $student2 = new Student("Ramesh Wagh", "Machine Learning",8.2);            // Object 
        
        $student1->data();
        $student2->data();

    

        if($student1->isEligible())
        {
            echo "$student1->name is eligible for scholorship.<br><br>";
        }
        else
        {
            echo "$student1->name is not eligible for scholorship.<br><br>";
        }


        if($student2->isEligible())
        {
            echo "$student2->name is eligible for scholorship.<br><br>";
        }
        else
        {
            echo "$student2->name is not eligible for scholorship.<br><br>";
        }

        


    ?>

</body>
</html>