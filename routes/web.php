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

Route::get('/', 'PageController@index');

Route::get('/news', 'PageController@newsList');
Route::get('/news/{slug}', 'PageController@newsInner');

Route::get('/post', 'PageController@postList');
Route::get('/post/{slug}', 'PageController@postInner');


Route::get('/products', 'PageController@product');
Route::get('/product/{id}', 'PageController@category');
Route::get('/product/{id}/{slug}', 'PageController@productInner');


Route::post('/filter_collagen', 'ProductController@filterCollagen');
Route::post('/filter_hairCare', 'ProductController@filterHairCare');

Route::get('/cart', 'ProductController@getCart');

Route::get('/add-to-cart/{category_id}/{slug}', 'ProductController@getAddToCart');
Route::post('/send', 'MailController@send');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
