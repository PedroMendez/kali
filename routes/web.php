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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/about', 'AboutController@index')->name('about');

Route::get('/info', 'InfoController@index')->name('info');

Route::get('/pictures', 'PicturesController@index')->name('pictures');

Route::post('/avatars', 'AvatarsController@store');

Route::resource('/profiles', 'ProfilesController');

Route::resource('/calendars', 'CalendarsController');