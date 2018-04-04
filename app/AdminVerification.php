<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Admin;

class AdminVerification extends Model
{
  protected $fillable = [
      'admin_id','token',
  ];

  public function getRouteKeyName()
    {
    	return 'token';
    }


  public function user()
  {
  return $this->belongsTo(Admin::class, 'admin_id');
  }

}
