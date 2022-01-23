<?php

require_once '../init.php';

use App\Libraries\Blade;
use App\Models\Record;

$user = $_SESSION['user'];
$records = Record::all();

if (!isset($_SESSION['user'])) {
  header("Location: ../index.php?error=notloggedin");
}

$_SESSION['page'] = 'home';
return Blade::view('home', ['records' => $records]);
