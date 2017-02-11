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
Route::group(['middleware' => \App\Http\Middleware\Language::class], function () {
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/category_products/{id}', 'HomeController@getCategoryProducts');
    Route::get('/sub_categories/{id}', 'HomeController@getSubCategories');
    Route::get('/product_modal/{id}', 'HomeController@getProductModal');
    Route::post('/contact_us', 'HomeController@postContactUs')->name('contact_us');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
    Route::put('/categories/{id}/update_extra', 'Admin\CategoriesController@updateExtra')->name('admin.categories.updateExtra');
    Route::post('/categories/{id}/add_extra', 'Admin\CategoriesController@addExtra')->name('admin.categories.addExtra');
    Route::put('/products/{id}/update_extra', 'Admin\ProductsController@updateExtra')->name('admin.products.updateExtra');
    Route::put('/news/{id}/updateTranslations', 'Admin\NewsController@updateTranslations')->name('admin.news.updateTranslations');

//    $namespacePrefix = '\\TCG\\Voyager\\Http\\Controllers\\';

//    try {
//        foreach (\TCG\Voyager\Models\DataType::all() as $dataTypes) {
////            if ($dataTypes->slug == 'categories') {
////                Route::resource($dataTypes->slug, 'CategoriesBreadController');
////            } else {
//                Route::resource($dataTypes->slug, 'Admin\Voyager\VoyagerBreadController');
////            }
//        }
//    } catch (\InvalidArgumentException $e) {
//        throw new \InvalidArgumentException("Custom routes hasn't been configured because: " . $e->getMessage(), 1);
//    } catch (\Exception $e) {
//        // do nothing, might just be because table not yet migrated.
//    }
});
