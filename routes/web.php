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
    return redirect('/news', 301);
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/news', 'HomeController@news');

Route::resource('tasks', 'TaskController');
