<?php
  
  session_start(); //start session
  unset($_SESSION['user']); //unset session user
  unset($_SESSION['page']);
  session_unset(); //unset entire session
  session_destroy(); //kill session

  header("Location: ../index.php?success=loggedout"); //redirect