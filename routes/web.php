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


Route::resource('/products', 'ProductController');

Route::get('/', 'HomeController@home_products');

Route::get('/shop', 'HomeController@shop');

Route::get('/about', 'HomeController@about');

Auth::routes();

Route::get('/home', 'ProductController@index')->name('home');
Route::post('/comprar', 'OrderController@comprar');
