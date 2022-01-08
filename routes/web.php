<?php

use Illuminate\Support\Facades\Route;

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


//Stock 
Route::get('/' , 'StockController@index')->name('index.stocks');
Route::get('/stocks/create' , 'StockController@create')->name('create.stocks');
Route::post('stocks/store' , 'StockController@store')->name('store.stocks');
Route::get('/productsOfStocks/show/{id}' , 'StockController@show')->name('show.stocks');
Route::get('/outProductFromStock/{id}' , 'StockController@outProduct');

//Product
Route::get('/products' , 'ProductController@index')->name('index.products');
Route::get('/products/create' , 'ProductController@create')->name('create.products');
Route::post('/products/store' , 'ProductController@store')->name('store.products');
Route::get('/enterProductFromStock/{id}' , 'ProductController@enroll');