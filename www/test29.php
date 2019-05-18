<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
    class Chef {
      function makeChicken(){
        echo "The chef makes chicken <br>";
      }
      function makeSalad(){
        echo "The chef makes Salad <br>";
      }
      function makeSpecialDish(){
        echo "The chef makes bbq ribs <br>";
      }
    }

    class ItarianChef extends Chef {

      function makePasta(){
        echo "The chef makes pasta <br>";
      }
      function makeSpecialDish(){
        echo "The chef makes chicken parm";
      }

    }

    $chef = new Chef();
    $chef->makeChicken();
    $chef->makeSpecialDish();

    $chef = new ItarianChef();
    $chef->makeChicken();
    $chef->makePasta();
    $chef->makeSpecialDish();

     ?>

  </body>
</html>
