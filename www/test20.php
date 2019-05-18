<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
    $index = 1;
    while($index <= 5){
      echo "$index <br>";
      $index++;
    }
    $luckeyNumbers = array(4, 8, 14, 16, 23, 42);
    for($i = 0; $i <= count($luckeyNumbers); $i++){
      echo "$luckeyNumbers[$i] <br>";
    }


     ?>

  </body>
</html>
