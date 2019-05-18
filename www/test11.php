<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <form action="test11.php" method="post">

      Apples：<input type="checkbox" name="fruits[]" value="apples"><br>
      Orange：<input type="checkbox" name="fruits[]" value="orange"><br>
      Pears：<input type="checkbox" name="fruits[]" value="pears">

      <input type="submit">
    </form>

    <?php
    echo $_POST["fruits"][0];
     ?>


  </body>
</html>
