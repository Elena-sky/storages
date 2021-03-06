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
    return redirect()->route('login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/dashboard', 'IndexController@index')->name('dashboard');


Route::group([ 'middleware' => 'auth'], function(){

    Route::resource('warehouses', 'WarehouseController');

    Route::resource('product', 'ProductController');

});