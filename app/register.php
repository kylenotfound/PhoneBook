<?php

require '../init.php';

use App\Models\User;
use App\Libraries\Blade;

if (isset($_POST['register-submit'])) {
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  //checking for a user with the same credentials entered
  $user = User::where('username', $username)
    ->orWhere('email', $email)
    ->first();

  if (empty($username) || empty($email) || empty($password)) { 
    header("Location:  ../index.php?error=emptyfields&uid=" . $username . "&mail=" . $email);
    exit();
  }
  else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)) {
    header("Location:  ../index.php?error=invaliduidmail");
    exit();
  }
  else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("Location:  ../index.php?error=invalidmail&uid=" . $username);
    exit();
  }
  else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
    header("Location:  ../index.php?error=invaliduid&mail=".$email);
    exit();
  }
  else if ($user != null) {
    header("Location:  ../index.php?error=usertaken&uid=" . $username . "&mail=" . $email);
    exit();
  }


  $user = User::create([
    'username' => $username,
    'email' => $email,
    'password' => password_hash($password, PASSWORD_DEFAULT)
  ]);

  $_SESSION['user'] = $user;
  $_SESSION['page'] = 'home';

  header("Location: home.php?success=registered");
}
