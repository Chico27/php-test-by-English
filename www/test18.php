<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <form action="test18.php" method="post">
      What was your grade?
      <input type="text" name="grade">
      <input type="submit">
    </form>

    <?php
    $grade = $_POST["grade"];
    switch ($grade) {
      case 'A':
        echo "You did amaging";
        break;
      case 'B':
      echo "You did pretty good";
          // code...
        break;

      default:
        // code...
        break;
    }
     ?>



  </body>
</html>
