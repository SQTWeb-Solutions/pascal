<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Admin;
use Mail;
use App\Events\AdminRegistered;
class EloquentEventServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
      Admin::created(function($user) {

          $token = $user->verificationToken()->create([
              'token' => bin2hex(random_bytes(64))
          ]);

          event(new AdminRegistered($user));
      });
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
