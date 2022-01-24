<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;
use App\Models\User;
use Carbon\Carbon;

class Record extends Model {

  protected $table = 'record';
  protected $fillable = ['building_name', 'address', 'phone_number', 
    'user_submitted_name', 'is_private', 'created_at', 'updated_at'
  ];

  public function user() {
    return $this->belongsTo(User::class);
  }

  public function getId() {
    return $this->id;
  }

  public function getBuildingName() {
    return $this->building_name;
  }

  public function getAddress() {
    return $this->address;
  }

  public function getPhoneNumber() {
    return $this->phone_number;
  }

  public function getSubmittedName() {
    return $this->user_submitted_name;
  }

  public function isPrivate() {
    return $this->is_private;
  }

  public function getFormattedCreatedAt() {
    return Carbon::parse($this->created_at)->format('m-d-Y');
  }

  public function getFormattedUpdatedAt() {
    return Carbon::parse($this->updated_at)->format('m-d-Y');
  }
}