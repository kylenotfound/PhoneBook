<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;
use App\Models\Record;

class User extends Model {

  protected $table = 'user';

  protected $fillable = ['username', 'email', 'password'];

  protected $hidden = ['password'];

  public $timestamps = true;

  public function records() {
    return $this->hasMany(Record::class);
  }

  public function getUsername() {
    return $this->username;
  }

  public function getEmail() {
    return $this->email;
  }

}