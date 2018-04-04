<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdminPasswordPassword extends Model
{
  protected $fillable = [
      'email', 'token',
  ];

  public function getAdmin(){
    return $this->belongsTo('App\Admin', 'email', 'email');
  }
}
