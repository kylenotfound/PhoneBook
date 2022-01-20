<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

class User extends Model {

  protected $table = 'user';

  protected $fillable = ['username', 'email', 'password'];

  protected $hidden = ['password'];

  public $timestamps = [];

}