<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Cache;

class LanguageServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     * This servcice provides languages available in the app
     * @return void
     */
    public function boot()
    {
        $language = collect( [
          [
          'language' => 'English',
          'route' => 'language.english'
          ],
          [
          'language' => 'French',
          'route' => 'language.french'
          ],
          [
          'language' => 'Spanish',
          'route' => 'language.spanish'
          ]
        ]);
        Cache::forever('language', $language);
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
