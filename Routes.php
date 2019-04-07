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


// product links
Route::get('/add/product/view', 'ProductController@addproductview');
Route::post('/add/product/insert', 'ProductController@addproductinsert');
Route::get('/product/update/{product_id}', 'ProductController@productupdate');
Route::post('/update/product/insert', 'ProductController@updateproductinsert');
Route::get('/product/delete/{product_id}', 'ProductController@productdelete');
Route::get('/deleted/product/list', 'ProductController@deletedproductlist');
Route::get('/product/restore/{product_id}', 'ProductController@productrestore');


// slider links
Route::get('/add/slider/view', 'SliderController@addsliderview');
Route::post('/add/slider/insert', 'SliderController@addsliderinsert');
Route::get('/slider/update/{product_id}', 'SliderController@sliderupdate');
Route::post('/edit/slider/insert', 'SliderController@editsliderinsert');
Route::get('/slider/delete/{product_id}', 'SliderController@sliderdelete');
Route::get('/deleted/slider/list', 'SliderController@deletedsliderlist');
Route::get('/slider/restore/{product_id}', 'SliderController@sliderrestore');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
