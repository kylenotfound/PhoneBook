<?php

require '../init.php';

use App\Models\User;
use App\Libraries\Blade;

if(isset($_POST['login-submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  if (empty($username) || empty($password)) {
    header("Location:  ../index.php?error=emptyfields&uid=" . $username);
    exit();
  } 

  $user = User::where('username', $username)->first();

  if ($user == null) {
    header("Location:  ../index.php?error=invalidinvalidusername&uid=" . $username);
    exit();
  }

  if (password_verify($password, $user->password)) {
    $_SESSION['user'] = $user;
    header("Location: home.php?success=loggedin");  
  } else {
    header("Location: ../index.php?error=invalidpassword");
  }
}