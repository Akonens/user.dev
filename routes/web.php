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

Route::get('/allusers', function () {
  $data['users'] = \App\User::all();
  return view('allusers', $data);
});


Auth::routes();

Route::get('/home', 'HomeController@index');
