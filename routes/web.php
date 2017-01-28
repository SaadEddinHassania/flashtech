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


Route::get('test' ,function(){
    $fb = new \Facebook\Facebook([
        'app_id' => '1811543022426737',
        'app_secret' => '8eecda49d368724121d3683a63780fb1',
        'default_graph_version' => 'v2.8',
        'default_access_token' => 'EAAZAvlrpY2nEBALejeQFXnx0Uiex6sXPVbZADaTIry5i5M9bi1KN1jXMxWBu0senLHKVlN7hhNA3QP1s7RCMvZC9ttUE2mLCI9dUwIJJH7Gm9Ryhfgee1GGzsrR7xjC172K9NnmJXAlDqdAVtLvcAHBIEPgFZA6aZAOtM3vUGle9cG8Q9SkAB', // optional
    ]);
    try {
        // Requires the "read_stream" permission
        $response = $fb->get('/me/feed?fields=message,full_picture,id&limit=5');
    } catch(Facebook\Exceptions\FacebookResponseException $e) {
        // When Graph returns an error
        echo 'Graph returned an error: ' . $e->getMessage();
        exit;
    } catch(Facebook\Exceptions\FacebookSDKException $e) {
        // When validation fails or other local issues
        echo 'Facebook SDK returned an error: ' . $e->getMessage();
        exit;
    }

    $feedEdge = $response->getGraphEdge();

    return json_decode($feedEdge);

});

Route::get('/', 'HomeController@index');
Route::get('/category-products/{id}', 'HomeController@getCategoryProducts');
Route::get('/sub-categories/{id}', 'HomeController@getSubCategories');
Route::get('/product-modal/{id}', 'HomeController@getProductModal');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
