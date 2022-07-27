<?php

class Login
{
  function __construct($email, $pass)
  {
    session_start();
    ob_start();
    $this->user_email = $email;
    $this->user_pass = $pass;

    if ($this->user_email === $this->admin_email && $this->user_pass === $this->admin_pass) {
      $_SESSION['logged'] = "true";
    } 
    // else {
    //   $_SESSION = [];
    // }

    $is_login = $_SESSION['logged'];

    if (!$is_login) {
      header('Location:login.php');
    }
  }
  private $user_email;
  private $user_pass;
  private $admin_email = 'test@gmail.com';
  private $admin_pass = 'root';

  // private function validate() {

  // }
}

new Login($_POST['email'], $_POST['password']);
