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

Route::get('/logout', function () {
    Auth::logout();

    return redirect('/');
});

Auth::routes();

Route::view('user/menu', 'menu');
Route::get('user/menu', 'MenuController@index');
Route::view('user/contact', 'contact');
Route::view('login', 'login');
Route::view('register', 'register');

Route::group(['middleware' => ['auth','admin']], function() {
    Route::get('/admin', function () {
        return view('welcome');
        });
    Route::get('/admin/dashboard', 'DashboardController@index')->name('dashboard');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
