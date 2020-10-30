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
    Route::get('/admin/daftarmenu', 'MenuController@adminindex');
    Route::get('/admin/daftarmenu/edit/{id}', 'MenuController@adminindexedit');    
    Route::get('/admin/daftarmenu/tambah', 'MenuController@adminindextambah');
    Route::post('/admin/daftarmenu/tambahmenu', 'MenuController@adminindexstore')->name('tambahmenu');
    Route::put('/admin/daftarmenu/update/{id}', 'MenuController@adminindexupdate');
    Route::get('/admin/daftarmenu/hapus/{id}', 'MenuController@adminindexhapus');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
