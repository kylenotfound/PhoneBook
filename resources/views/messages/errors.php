<?php

  if (isset($_GET['error'])) {
    //registration erros
    if ($_GET['error'] == "emptyfields") {
      echo '<div class="alert alert-danger"><span>Please fill in all fields!</span></div>';
    }
    else if ($_GET['error'] == "invaliduidmail") {
      echo '<div class="alert alert-danger"><span>Invalid username and e-mail!</span></div>';
    }
    else if ($_GET['error'] == "invalidmail") {
      echo '<div class="alert alert-danger"><span>Invalid e-mail!</span></div>';
    }
    else if ($_GET['error'] == "invaliduid") {
      echo '<div class="alert alert-danger"><span>Invalid username!</span></div></p>';
    }
    else if ($_GET['error'] == "usertaken") {
      echo '<div class="alert alert-danger"><span>Username is taken!</span></div>';
    }
    else if ($_GET['error'] == "usertaken") {
      echo '<div class="alert alert-danger"><span>Username or e-mail address is already taken!</span></div>';
    }
    //login errros
    else if ($_GET['error'] == "invalidusername") {
      echo '<div class="alert alert-danger"><span>Invalid Username!</span></div>';
    }
    else if ($_GET['error'] == "invalidpassword") {
      echo '<div class="alert alert-danger"><span>Invalid Password!</span></div>';
    }
    //unauth access
    else if ($_GET['error'] == "notloggedin") {
      echo '<div class="alert alert-danger"><span>You are not logged in!</span></div>';
    }
  }                
?>