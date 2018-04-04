<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['domain' => env('MAIN_DOMAIL_URL')], function () {
  // change the language route
  Route::get('/lang/en', 'LanguageController@english')->name('language.english');
  Route::get('/lang/es', 'LanguageController@spanish')->name('language.spanish');
  Route::get('/lang/fr', 'LanguageController@french')->name('language.french');

  Route::group(['prefix' => Translation::getRoutePrefix(), 'middleware' => ['locale']], function()
  {
    // Static pages route and website route
    Route::get('/', 'HomeController@index')->name('index');
    Route::get('/', 'HomeController@index')->name('home');

    Route::prefix('foundation')->group(function () {
      Route::view('about', 'pages.foundation.about.page')->name('foundation.about');
      Route::get('sponsors', 'HomeController@sponsors')->name('foundation.sponsors');
    });

    Route::get('/contact', 'HomeController@contact')->name('contact');
    Route::get('/events', 'Event\EventController@index')->name('events');
    Route::get('/news', 'News\NewsController@index')->name('news');

    // Controller for sports page
    Route::prefix('sports')->group(function () {
      Route::get('/', 'Sports\SportsController@index')->name('sports');
      Route::get('athlete/{athlete}', 'Sports\SportsController@details')->name('sports.athlete');
      Route::get('{category}', 'Sports\SportsController@category')->name('sports.category');
    });

    // controller for volunteer
    Route::prefix('volunteer')->group(function () {
      Route::view('/', 'pages.volunteer.page')->name('volunteer');
      Route::get('train', 'Volunteer\VolunteerController@train')->name('volunteer.train');
      Route::get('support', 'Volunteer\VolunteerController@support')->name('volunteer.support');
    });

    // suggest a kid routes
    Route::prefix('suggest')->group(function () {
      Route::get('/', 'Suggest\SuggestController@index')->name('suggest');
      Route::get('{sport}', 'Suggest\SuggestController@sportType')->name('suggest.sport');
    });

  });

});

Route::group(['domain' => env('ADMIN_DOMAIN_URL')], function () {
  Route::get('/', 'AdminController@index')->name('admin.dashboard');

  // AutnenticationRoutes
  Route::get('/login', 'Admin\LoginController@showLoginForm')->name('admin.login');
  Route::post('/login', 'Admin\LoginController@login');
  Route::post('/logout', 'Admin\LoginController@logout')->name('admin.logout');

  Route::get('/password-reset', 'Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.email');
  Route::post('/password-email', 'Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.request');
  Route::post('/password-reset', 'Admin\ResetPasswordController@reset')->name('admin.password.submit');
  Route::get('/password-reset/{token}', 'Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');

  Route::get('/register', 'Admin\RegisterController@showRegistrationForm')->name('admin.register');
  Route::post('/register', 'Admin\RegisterController@register');
  Route::get('/register/confirm', 'Admin\RegisterController@confirmRegistration')->name('admin.register.confirm');
  Route::get('/verify/token/{token}', 'Admin\VerificationController@verify')->name('admin.verify');
  Route::get('/verify/resend', 'Admin\VerificationController@resend')->name('admin.verify.resend');


});
