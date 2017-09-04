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
  if (isset($_SERVER['SERVER_PORT']) && ($_SERVER['SERVER_PORT'] === '443')) {
    return view('layouts.base');
  } else {
   return redirect('https://hbs.magma-soft.at/index.php');
  }
});

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
