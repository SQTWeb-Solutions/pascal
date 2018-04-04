<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Notifications\AdminResetPasswordNotification;
use Illuminate\Auth\Passwords\CanResetPassword;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\HasMedia\HasMedia;

class Admin extends Authenticatable implements HasMedia
{
  use Notifiable, CanResetPassword, HasMediaTrait;
  /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname', 'lastname', 'email', 'password', 'role', 'verified'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function verificationToken()
    {
        return $this->hasOne(AdminVerification::class);
    }
    public function hasVerifiedEmail()
    {
        return $this->verified;
    }

    public static function byEmail($email)
    {
        return static::where('email', $email);
    }

    /**
     * Always Capitalise the first name when we want to save it to the database
     */
    public function setFirstnameAttribute($value) {
      $this->attributes['firstname'] = ucfirst($value);
    }
    /**
     * Always Capitalise the last name when we want to save it to the database
     */
    public function setLastnameAttribute($value) {
      $this->attributes['lastname'] = ucfirst($value);
    }

    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new AdminResetPasswordNotification($token));
    }
}
