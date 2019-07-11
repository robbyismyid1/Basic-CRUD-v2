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
    return view('front.index');
});
Route::get('/kategori', function () {
    return view('front.category');
});
Route::get('/kontak', function () {
    return view('front.contact');
});
Route::get('/post', function () {
    return view('front.post');
});
Route::get('/regular', function () {
    return view('front.regular');
});
Route::resource('/produk', 'ProdukController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::resource('/artikel', 'ArtikelController');
    Route::resource('/kategori', 'KategoriController');
    Route::resource('/tag', 'TagController');
});
