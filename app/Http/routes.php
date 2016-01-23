<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

//Route::group(['middleware' => ['web']], function () {
//    //
//});

//home
Route::get('/', 'HomeController@index');
Route::get('home', 'HomeController@index');

//about
Route::get('about', 'AboutController@index');

//my works
Route::get('my_works', 'MyWorksController@index');

//request
Route::get('request', 'RequestController@index');

//contact
Route::get('contact', 'ContactController@index');

//localization
Route::get('set_locale', 'LocalizationController@setLocale');