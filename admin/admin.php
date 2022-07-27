<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

require_once "config/access.php";
require_once 'config/db.php';
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin</title>
  <link rel="icon" type="image/x-icon" href="./img/logo.png">

  <link rel="stylesheet" href="./css/admin.min.css">

  <style>
    .admin-header img {
      width: 80px;
    }
  </style>
</head>

<body>
  <header class="admin-header">
    <div class="row">
      <div class="wrap flex jc-sb">
        <div>
          <img src="../img/logo.png">
        </div>
        <form action="login.php" method="post">
          <fieldset class="flex column half-container m-auto">
            <input type="submit" name="logout" value="Logout" class="button m-auto">
          </fieldset>
        </form>
      </div>
    </div>
  </header>
  <main class="admin-main flex">
    <nav class="admin-nav">
      <ul class="buttons">
        <li>
          <a class="nav-item active" href="#link_one">Menu Item</a>
        </li>
        <li>
          <a class="nav-item" href="#link_two">Hero</a>
        </li>
        <li>
          <a class="nav-item" href="#link_three">About</a>
        </li>
        <li>
          <a class="nav-item" href="#link_four">Skills</a>
        </li>
        <li>
          <a class="nav-item" href="#link_five">Services</a>
        </li>
        <!-- <li>
          <a class="nav-item" href="#link_six">Portfolio</a>
        </li> -->
        <li>
          <a class="nav-item" href="#link_seven">Messages</a>
        </li>
      </ul>
    </nav>
    <div class="main-container flex column w-90">
      <?php require_once "./parts/menu_items.php" ?>
      <?php require_once "./parts/hero.php" ?>
      <?php require_once "./parts/about.php" ?>
      <?php require_once "./parts/skills.php" ?>
      <?php require_once "./parts/services.php" ?>
      <?php require_once "./parts/portfolio.php" ?>
      <?php require_once "./parts/portfolio.php" ?>
      <?php require_once "./parts/message.php" ?>
    </div>
  </main>
  <?php require_once "./parts/footer.php" ?>
</body>

</html>