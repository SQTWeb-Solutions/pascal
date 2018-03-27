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

// change the language route
Route::get('/lang/en', 'LanguageController@english')->name('language.english');
Route::get('/lang/es', 'LanguageController@spanish')->name('language.spanish');
Route::get('/lang/fr', 'LanguageController@french')->name('language.french');

Route::group(['prefix' => Translation::getRoutePrefix(), 'middleware' => ['locale']], function()
{
  // Static pages route and website route
  Route::get('/', 'HomeController@index')->name('index');
  Route::view('/foundation/about', 'pages.foundation.about.page')->name('foundation.about');
  Route::get('/foundation/sponsors', 'HomeController@sponsors')->name('foundation.sponsors');
  Route::get('/contact', 'HomeController@contact')->name('contact');
  Route::get('/events', 'Event\EventController@index')->name('events');
  Route::get('/news', 'News\NewsController@index')->name('news');

  // Controller for sports page
  Route::get('/sports', 'Sports\SportsController@index')->name('sports');
  Route::get('/sports/athlete/{athlete}', 'Sports\SportsController@details')->name('sports.athlete');
  Route::get('/sports/{category}', 'Sports\SportsController@category')->name('sports.category');

  // controller for volunteer
  Route::view('/volunteer', 'pages.volunteer.page')->name('volunteer');
  Route::get('/volunteer/train', 'Volunteer\VolunteerController@train')->name('volunteer.train');
  Route::get('/volunteer/support', 'Volunteer\VolunteerController@support')->name('volunteer.support');
});
