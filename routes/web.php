<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'HomeController@index');
Route::get('/category-products/{id}', 'HomeController@getCategoryProducts');
Route::get('/sub-categories/{id}', 'HomeController@getSubCategories');
Route::get('/product-modal/{id}', 'HomeController@getProductModal');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
