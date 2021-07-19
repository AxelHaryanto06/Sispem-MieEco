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
Route::get('pesan/menu', 'MenuController@pesanindex');
Route::view('user/contact', 'contact');
Route::view('login', 'login');
Route::view('register', 'register');

Route::group(['middleware' => ['auth', 'admin']], function () {
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
    Route::get('/admin/pemesanan', 'PesanController@adminindex');
    Route::get('/admin/pemesanan/{id}', 'PesanController@admindetail');
    Route::post('/admin/konfirmasipemesanan', 'PesanController@adminkonfirmasi');
    Route::get('/admin/layanan', 'LayananController@viewlayanan');
    Route::get('/admin/layanan/tambah', 'LayananController@tambahlayanan');
    Route::post('/admin/layanan/tambahlayanan', 'LayananController@tambahlayananstore');
    Route::get('/admin/layanan/edit/{id}', 'LayananController@editlayanan');
    Route::put('/admin/layanan/update/{id}', 'LayananController@updatelayanan');
    Route::get('/admin/layanan/hapus/{id}', 'LayananController@deletelayanan');
});
Auth::routes();

Route::get('layanan', 'PesanController@layanan');
Route::get('pesan/{id}', 'PesanController@indexpesan');
Route::get('user/menu/pesan/{id}', 'PesanController@index');
Route::post('user/menu/pesan/{id}', 'PesanController@pesan');
//Route::get('cart', 'PesanController@cart');
Route::delete('/cart/{id}', 'PesanController@deleteCart');
Route::get('check-out', 'PesanController@checkout');
Route::get('review-order/{id}', 'PesanController@tinjaupesanan');
Route::post('/review-order', 'PesanController@tinjaupesananstore');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('profile', 'ProfileController@index');
Route::put('/profile/{id}', 'ProfileController@update');

Route::get('history', 'HistoryController@index');
Route::get('history/{id}', 'HistoryController@detail');
Route::get('/history/bukti_pesan/{id}', 'HistoryController@bukti_pesan');
Route::post('history/pembayaran/{id}', 'HistoryController@detailbayar');
