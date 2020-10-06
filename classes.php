<!DOCTYPE html>
<html lang='en'>
<head>
  <meta charset='UTF-8'>
  <title></title>
</head>
<body>
  
  <?php

  // class is blueprint for an object
    class Book {
      var $title;
      var $author;
      var $pages;
    }

    $book1 = new Book;
    // this is an object - an instance of a class
    $book1->title = "Harry Potter";
    $book1->author = "JK Rowling";
    $book1->pages = 400;

    echo $book1->title;
    echo $book1->author;
    echo $book1->pages;

    $book2 = new Book;

    $book2->title = "Lord of the Rings";
    $book2->author = "Tolkien";
    $book2->pages = 600;

    echo $book2->title;
    echo $book2->author;
    echo $book2->pages;
  ?>

</body>
</html>