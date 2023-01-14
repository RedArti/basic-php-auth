<?php

  session_start();
  
  include 'connect.php';

  $login  = $_POST['login'];
  $passwd = '0x' . md5($_POST['passwd']);

  $query = "SELECT * FROM `users` WHERE `login` = '$login' AND `passwd` = '$passwd'";

  $check_user = mysqli_query($connect, $query);

  if (mysqli_num_rows($check_user)) {
    if (isset($_SESSION['message'])) {
      unset($_SESSION['message']);
    }

    $user = mysqli_fetch_assoc($check_user);

    $_SESSION['user'] = [
      'id' => $user['id'],
      'full_name' => $user['full_name'],
      'avatar' => $user['avatar'],
      'email' => $user['email']
    ];

    header('Location: ../profile.php');
  } else {
    $_SESSION['message'] = 'Логин или пароль введены неверно!';
    header('Location: ../index.php');
  }