<?php

  session_start();

  if (isset($_SESSION['user'])) {
    header('Location: ./profile.php');
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./style/style.css">
  <title>Document</title>
</head>
<body>
  
  <div>
    <h1>Авторизация</h1>
  
    <form action="./vendor/authUser.php" method="POST">
      <label for="login">
        <span>Логин</span>
        <input id="login" type="text" name="login" placeholder="Введите логин">
      </label>
  
      <label for="passwd">
        <span>Пароль</span>
        <input id="passwd" type="password" name="passwd" placeholder="Введите пароль">
      </label>

      <input type="submit" name="Отправить" value="Войти">
    </form>

    <p class="info">Если вы не зарегистрированы. <a href="./signup.php">Зарегистрируйтесь</a></p>

    <?php
      if (isset($_SESSION['message'])) {
        echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
      }
      unset($_SESSION['message']);
    ?>
  </div>

</body>
</html>