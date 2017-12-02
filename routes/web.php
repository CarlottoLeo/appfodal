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
Route::get('/galeria', function () {
    return view('galeria');
});

Route::get('/info', function () {
    return view('info');
});

Route::get('/historia', function () {
    return view('historia');
});

Route::get('/contato', function () {
    return view('contato');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/markbarber', 'HomeController@markbarber')->name('markbarber');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
