<!DOCTYPE html>
<html lang='en'>
<head>
  <meta charset='UTF-8'>
  <title></title>
</head>
<body>
  
  <?php

    class Book {
      var $title;
      var $author;
      var $pages;

      // function __construct($name){
      //   echo "New Book Created -$name <br>"
      // }
      function __construct($aTitle, $aAuthor, $aPages){
        $this->title = $aTitle;
        $this->author = $aAuthor;
        $this->pages = $aPages;
      }
    }

    $book1 = new Book("Harry Potter", "JK Rowling", 400);

    // $book1 = new Book("Tom");
    // $book1->title = "Harry Potter";
    // $book1->author = "JK Rowling";
    // $book1->pages = 400;

    // echo $book1->title;
    // echo $book1->author;
    // echo $book1->pages;

    $book2 = new Book("George");

    $book2->title = "Lord of the Rings";
    $book2->author = "Tolkien";
    $book2->pages = 600;

    // echo $book2->title;
    // echo $book2->author;
    // echo $book2->pages;
  ?>

</body>
</html>