<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
    class Book {
      var $title;
      var $author;
      var $pages;

      function __construct($name){
        echo "$name <br>";
      }
    }
    $book1 = new Book("Mike");
    $book1->title = "Harry Potter";
    $book1->author = "JK Rowling";
    $book1->pages = 400;

    $book2 = new Book("Tom");
    $book2->title = "Lord Of the Rings";
    $book2->author = "Tolkien";
    $book2->pages = 700;

    echo $book1->title;
    echo $book1->author;
    echo $book2->author;
     ?>

  </body>
</html>
