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
        class Book                   // Class
        {
            var $title;             // Data Members
            var $author;
            var $pages;

    

            function __construct($title,$author,$pages)            // Parametirzed constructor. (It can also be non parameterized, as in C++)
            {
                $this->title = $title;
                $this->author = $author;
                $this->pages = $pages;
            }
        }

        $book1 = new Book("Harry Potter", "J.K.Rowling",400);            // Object 

        echo "Title : $book1->title <br><br>";
        echo "Author : $book1->author <br><br>";
        echo "Number of Pages : $book1->pages <br><br>";


    ?>

</body>
</html>