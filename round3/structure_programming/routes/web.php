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


Route::get('/', 'HomeController@index')->name('web.home');


Route::group(['middleware' => 'web', 'prefix' => 'admin', 'namespace' => '\Modules\User\Http\Controllers'], function()
{
    Route::group(['middleware' => 'guest:admin,admin.index'], function() {
        Route::get('/login', 'AdminController@showLoginForm')->name('admin.login');
        Route::post('/login', 'AdminController@login')->name('admin.post-login');
    });

    Route::group(['middleware' => 'auth.admin'], function() {
        Route::get('/', 'AdminController@index')->name('admin.index');
        Route::get('/logout', 'AdminController@logout')->name('admin.logout');
    });
});


Route::group(['prefix' => '', 'namespace' => '\Modules\User\Http\Controllers'], function() {
    Route::get('/login', 'UserController@showLoginForm')->name('web.login');
    Route::post('/login', 'UserController@login')->name('web.post-login');
    Route::post('/register', 'UserController@register')->name('web.post-register');
    Route::get('/logout', 'UserController@logout')->name('web.logout');
});

//product
Route::group(['middleware' => 'web', 'prefix' => 'admin', 'namespace' => '\Modules\Product\Http\Controllers'], function()
{
    Route::get('/products', 'AdminProductController@index')->name('admin.products.list');
    Route::get ('/add-products', 'AdminProductController@add_product')->name('admin.add_product');
    Route::post('/save-products', 'AdminProductController@save_product')->name('admin.save_product');
    Route::get('/edit-products/{product_id}', 'AdminProductController@edit_product')->name('admin.edit_product');
    Route::post('/update-products/{product_id}', 'AdminProductController@update_product')->name('admin.update_product');
    Route::get('/delete-products/{product_id}', 'AdminProductController@delete_product')->name('admin.delete_product');
});

Route::group(['prefix' => '', 'namespace' => '\Modules\Product\Http\Controllers'], function()
{
    Route::post('/search', 'ProductController@search')->name('web.search');
});

//Order
Route::group(['prefix' => '', 'namespace' => '\Modules\Order\Http\Controllers'], function()
{
    Route::get('/cart', 'OrderController@cart')->name('web.cart');
    Route::get('/addcart/{id}', 'OrderController@user_addCart')->name('web.add_cart');
    Route::get('/Delete-Item-Cart/{id}', 'OrderController@user_DeleteItemCart')->name('web.delete_item_cart');
    Route::get('/checkout', 'OrderController@checkout')->name('web.checkout');
    Route::get('/save-checkout-customer', 'OrderController@save_checkout_customer')->name('web.save-checkout-customer');
    Route::get('/payment', 'OrderController@payment')->name('web.payment');
    Route::get('/order-place', 'OrderController@order_place')->name('web.order-place');
});

//Brand
Route::group(['prefix' => '', 'namespace' => '\Modules\Brand\Http\Controllers'], function()
{
    Route::get('/brand/{brand_slug}', 'BrandController@show_brand_home')->name('web.brand_home');
});

