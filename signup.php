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
    <h1>Регистрация</h1>
  
    <form action="./vendor/registerUser.php" method="POST" enctype="multipart/form-data">
      <label for="full_name">
        <span>ФИО</span>
        <input id="full_name" type="text" name="full_name" placeholder="Введите своё полное имя">
      </label>

      <label for="login">
        <span>Логин</span>
        <input id="login" type="text" name="login" placeholder="Введите логин">
      </label>

      <label for="email">
        <span>Почта</span>
        <input id="email" type="email" name="email" placeholder="Введите адрес своей почты">
      </label>

      <label for="avatar">
        <span>Загрузите аватар</span>
        <input id="avatar" type="file" name="avatar">
      </label>
  
      <label for="passwd">
        <span>Пароль</span>
        <input id="passwd" type="password" name="passwd" placeholder="Введите пароль">
      </label>

      <label for="repeat_passwd">
        <span>Подтверждение пароля</span>
        <input id="repeat_passwd" type="password" name="repeat_passwd" placeholder="Подтвердите пароль">
      </label>

      <input type="submit" name="Отправить">
    </form>

    <p class="info">Уже есть аккаунт? <a href="./index.php">Войдите</a></p>

    <?php
      if (isset($_SESSION['message'])) {
        echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
      }
      unset($_SESSION['message']);
    ?>
  </div>

</body>
</html>