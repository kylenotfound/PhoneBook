<?php
  
  session_start(); //start session
  unset($_SESSION['user']); //unset session user
  session_unset(); //unset entire session
  session_destroy(); //kill session
  //exit();

  header("Location: ../index.php?success=loggedout"); //redirect