  <?
    $i = 1;
    $b = 1;
    if (isset($_GET['age']) && is_numberic($_GET['age'])) {
      if ($_GET['age'] < $i) {
        echo 'Задуманное число не входит в
        числовой ряд';
      }  elseif ($_GET['age'] = $i) {
        echo 'Задуманное число входит в
        числовой ряд';
      } else ($_GET['age'] != $i) {
        $c = $i;
        $i = $b + 1;
        $b = $c;
      }
    }
    ?>

<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="index.html" method="get">
      <input type="number" name="age" value="">
        <input type="submit" name="" value="нажать">
    </form>
  </body>
</html>
