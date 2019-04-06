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
    return view('welcome');
});

// Products link lists
Route::get('/add/product/view', 'ProductController@addproductview');
Route::post('/product/insert', 'ProductController@productinsert');
Route::get('/product/delete/{product_id}', 'ProductController@productdelete');
Route::get('/product/restore/{product_id}', 'ProductController@productrestore');
Route::get('/product/edit/{product_id}', 'ProductController@productedit');
Route::post('/product/edit/insert', 'ProductController@producteditinsert');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
