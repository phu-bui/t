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

Route::group(['middleware' => 'web', 'prefix' => 'admin', 'namespace' => '\Modules\Admin\Http\Controllers'], function()
{
    Route::group(['middleware' => 'auth.admin'], function() {
        Route::get('/', 'AdminController@index')->name('admin.index');
        Route::get('/logout', 'Auth\LoginController@logout')->name('admin.logout');
        Route::get('/product', 'ProductController@index')->name('admin.product.list');

    });
    // redirect if has login
    Route::group(['middleware' => 'guest:admin,admin.index'], function() {
        Route::get('/login', 'Auth\LoginController@showLoginForm')->name('admin.login');
        Route::post('/login', 'Auth\LoginController@login')->name('admin.post-login');
    });

});

