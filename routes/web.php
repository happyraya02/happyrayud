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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('login', function () {
    return view('auth.login');
});

Route::get('index', function () {
    return view('index');
});

// Route::get('frontransaksi', function () {
//     return view('frontransaksi');
// });
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/', 'frontendController');
Route::resource('coffee', 'coffeeController');
Route::resource('kategori', 'kategoriController');
Route::resource('stok', 'stokController');
Route::resource('transaksi', 'transaksiController');

Route::group(['prefix' => '/'], function(){
    Route::get('index', 'frontendController@index');
    Route::get('frontransaksi/{coffee}', 'frontendController@frontransaksi');
    Route::post('cart-post', 'Ecommerce\CartController@addToCart')->name('front.cart');
    Route::get('/cart', 'Ecommerce\CartController@listCart')->name('front.list_cart');
    Route::post('/cart/update', 'Ecommerce\CartController@updateCart')->name('front.update_cart');
    Route::get('cart/{coffee}', 'frontendController@cart');
    Route::get('fav/{coffee}', 'frontendController@fav');
});
