<?php

if (isset($_GET['success'])) {

  if ($_GET['success'] == "loggedin") {
    echo '<div class="alert alert-success"><span>You are logged in!</span></div>';
  }
  else if ($_GET['success'] == "registered") {
    echo '<div class="alert alert-success"><span>You have registered!</span></div>';
  }
  else if ($_GET['success'] == "loggedout") {
    echo '<div class="alert alert-success"><span>You have logged out!</span></div>';
  }

}