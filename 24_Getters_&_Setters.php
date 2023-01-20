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

        class Movie
        {
            public $title;
            private $rating;              // Valid Rating : G, PG, PG-13, R, NR



            function __construct($title, $rating)         // Constructor
            {
                $this->title = $title;
                $this->setRating($rating);                               // If valid rating is not given, then it is set as NR (Not Rated)
            }                                                            // Interesting Trick : We can even use our setter functions inside our constructor to enforce the logic while creating objects.

            
            function getRating()                         // Getter
            {
                return $this->rating;
            }

            function setRating($rating)                  // Setter
            {
                if($this->isValidRating($rating))
                {
                    $this->rating = $rating;
                }
                else
                {
                    $this->rating = "NR";
                }
            }
            
            function isValidRating($rating)
            {
                $ratings = array("G", "PG", "PG-13", "R", "NR");

                for($i = 0 ; $i < count($ratings); $i++)
                {
                    if($rating == $ratings[$i]) return true;
                }

                return false;
            }
        }

        $avengers = new Movie("Avengers", "PG-13");


        echo $avengers->getRating();
    ?>

</body>
</html>