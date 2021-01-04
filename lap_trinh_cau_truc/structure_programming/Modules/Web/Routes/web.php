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

Route::group(['prefix' => '', 'namespace' => '\Modules\Web\Http\Controllers'], function() {
    Route::get('/', 'HomeController@index')->name('web.home');
    Route::get('/cart', 'HomeController@cart')->name('web.cart');
    Route::get('/checkout', 'HomeController@checkout')->name('web.checkout');
    Route::get('/search-order', 'HomeController@searchOrder')->name('web.search-order');
    Route::get('/detail', 'HomeController@detail')->name('web.product-detail');
    Route::get('/about-us', 'HomeController@aboutUs')->name('web.about-us');

});
