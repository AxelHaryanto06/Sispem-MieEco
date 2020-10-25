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
    return view('home');
});

Route::view('user/menu', 'menu');
Route::get('user/menu', 'MenuController@index');
Route::view('user/contact', 'contact');
Route::view('login', 'login');
Route::view('register', 'register');