<?php

require_once 'init.php';

use App\Libraries\Blade;
use App\Models\Record;

$records = Record::where('is_private', false)->get();

$_SESSION['page'] = 'welcome';
return Blade::view('welcome', ['records' => $records]);
