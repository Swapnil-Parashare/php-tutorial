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
        }

        $book1 = new Book;            // Object 


        // Initialization of Data Members.
        $book1->title = "Harry Potter"; 
        $book1->author = "JK Rowling";
        $book1->pages = 400;

        echo "Title : $book1->title <br><br>";
        echo "Author : $book1->author <br><br>";
        echo "Number of Pages : $book1->pages <br><br>";


    ?>

</body>
</html>