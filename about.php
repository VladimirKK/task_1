<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $user_name = 'Владимир Казаков';
      $email = 'vov.cazackow@yandex.ru';
      $age = '20';
      $description = 'Я студент 3 курса';
    ?>
    <main>
      <h2> Информация о пользователе </h2>
       <p>Имя: <strong><?= $user_name ?></strong></p>
       <p>Возраст: <strong><?=   $age ?></strong></p>
        <p>Email: <a href="#"><?= $email ?></a></p>
       <p>О себе <strong><?= $description ?></strong></p>
    </main>
    <section>
  <!--    <form class="" action="" method="post">
        Числовой ряд
        <input type="text" name="number" value="">
        <input type="submit" name="отправить" value="">
      </form>  -->

  </body>
</html>
