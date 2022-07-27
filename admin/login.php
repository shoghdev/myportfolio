<?php
if ($_SESSION['logged']) {
  session_start();
  header('Location:admin.php');
  exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="icon" type="image/x-icon" href="./img/logo.png">
  <link rel="stylesheet" href="./css/admin.min.css">
</head>

<body>
  <div class="contact-container half-container m-auto flex jc-c">
    <form action="admin.php" method="post">
      <fieldset class="flex column half-container m-auto">
        <input type="email" name="email" placeholder="Email">
        <input type="password" name="password" placeholder="Password">
        <input type="submit" name="login" value="Login" class="button m-auto">
      </fieldset>
    </form>
  </div>
</body>

</html>