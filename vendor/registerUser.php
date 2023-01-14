<?php

  session_start();

  include 'connect.php';

  $full_name     = $_POST['full_name'];
  $login         = $_POST['login'];
  $email         = $_POST['email'];
  $passwd        = $_POST['passwd'];
  $repeat_passwd = $_POST['repeat_passwd'];

  $ckeck_login = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login'");
  if (mysqli_num_rows($ckeck_login) > 0) {
    $_SESSION['message'] = 'Логин уже занят!';
    header('Location: ../signup.php');

    die();
  }

  if ($passwd === $repeat_passwd) {

    // Загрузка изображений в папку uploads
    $path = 'uploads/' . time() . $_FILES['avatar']['name'];
    if (!move_uploaded_file($_FILES['avatar']['tmp_name'], '../' . $path)) {
      $_SESSION['message'] = 'Ошибка при загрузке изображения';
      header('Location: ../signup.php');

      die();
    }

    $passwd = '0x' . md5($passwd);

    $query = "INSERT INTO `users` (`id`, `full_name`, `login`, `email`, `passwd`, `avatar`) VALUES (NULL, '$full_name', '$login', '$email', '$passwd', '$path')";

    mysqli_query($connect, $query);

    $_SESSION['message'] = 'Регистрация прошла успешно!';
    header('Location: ../index.php');

  } else {
    $_SESSION['message'] = 'Пароли не совпадают';
    header('Location: ../signup.php');
  }