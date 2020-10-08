<!DOCTYPE html>
<html lang='en'>
<head>
  <meta charset='UTF-8'>
  <title></title>
</head>
<body>
  
  <?php

    class Movie {
      public $title;
      // public $rating;
      private $rating;
      // visibility modifiers
      // public - code is visible to any other code in php program. Can be modified by any other code. Var is basically the same.
      // public used more commonly than var
      // private - any code outside code block won't be able to aceess

      function __contstruct($title, $rating){
        $this->title = $title;
        $this->setRating($rating);
        // stops constructor from giving an invalid rating
      }

      function getRating(){
        return $this->rating;
      }

      function setRating($rating){
        if($rating == "G" || $rating == "PG" || $rating == "PG-13" || $rating == "R"){
          $this->rating = $rating;
        } else {
          $this->rating = "NR";
        }
      }

    }

    $avengers = new Movie("Avengers", "PG-13");

    $avengers->rating = "dog"; // setter - won't work with private. Must use setRating() func
    $avengers->setRating("dog"); // won't pass if statement and will set to "NR"
    // can give the movie an invalid rating - like 'dog'

    echo $avengers->title; 
    echo $avengers->rating; // getter - won't work with private. Must use getRating() func
    echo $avengers->getRating();

  ?>

</body>
</html>