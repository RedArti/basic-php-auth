<?php

  session_start();

  if (!isset($_SESSION['user'])) {
    header('Location: ./index.php');
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./style/profile.css">
  <title>profile</title>
</head>
<body>
  <div class="profile_wrapper">
    <div class="wrapper">
      <img src="<?php echo './' . $_SESSION['user']['avatar'] ?>" alt="avatar">
      <p>ФИО: <?php echo $_SESSION['user']['full_name'] ?></p>
      <p>Email: <?php echo $_SESSION['user']['email'] ?></p>
      <a href="vendor/logout.php">Выйти</a>
    </div>
  </div>
</body>
</html>