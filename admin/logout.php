<?php
if(isset($_POST['logout'])) {
  session_start();
  $_SESSION = [];
  header('Location: login.php');
  exit;
}
?>