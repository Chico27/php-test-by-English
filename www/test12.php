<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
    $grades = array("Jim"=>"A+", "Pam"=>"B-", "Oscar"=>"C+");
    echo $grades["Jim"];
    echo "<br>";
    $grades["Oscar"] = "F";
    echo $grades["Oscar"];
     ?>

  </body>
</html>
