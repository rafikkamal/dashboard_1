<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', [
    'as' => 'home', 
    'uses' => 'AppController@showHomePage'
]);
Route::get('/dashboard', [
    'as' => 'dashboard', 
    'uses' => 'ProductController@index'
]);
//Products Route
Route::get('/product',[
    'as' => 'products.index',
    'uses' => 'ProductController@index'
]);
Route::get('/product/create',[
    'as' => 'products.create',
    'uses' => 'ProductController@createProduct'
]);
Route::post('/product/store',[
    'as' => 'products.store',
    'uses' => 'ProductController@storeProduct'
]);
Route::get('/product/show',[
    'as' => 'products.show',
    'uses' => 'ProductController@showProduct'
]);
Route::patch('/product/edit/{id}',[
    'as' => 'products.edit',
    'uses' => 'ProductController@editProduct'
]);
Route::post('/product/update/{id}',[
    'as' => 'products.update',
    'uses' => 'ProductController@updateProduct'
]);
Route::get('/product/delete/{id}',[
    'as' => 'products.delete',
    'uses' => 'ProductController@deleteProduct'
]);
//Categories Route
Route::get('/category',[
    'as' => 'categories.index',
    'uses' => 'CategoryController@index'
]);
Route::get('/category/create',[
    'as' => 'categories.create',
    'uses' => 'CategoryController@createCategory'
]);
Route::post('/category/store',[
    'as' => 'categories.store',
    'uses' => 'CategoryController@storeCategory'
]);
Route::get('/category/show',[
    'as' => 'categories.show',
    'uses' => 'CategoryController@showCategory'
]);
Route::patch('/category/edit/{id}',[
    'as' => 'categories.edit',
    'uses' => 'CategoryController@editCategory'
]);
Route::post('/category/update/{id}',[
    'as' => 'categories.update',
    'uses' => 'CategoryController@updateCategory'
]);
Route::get('/category/delete/{id}',[
    'as' => 'categories.delete',
    'uses' => 'CategoryController@deleteCategory'
]);
//Vendors Route
Route::get('/vendor',[
    'as' => 'vendors.index',
    'uses' => 'VendorController@index'
]);
Route::get('/vendor/create',[
    'as' => 'vendors.create',
    'uses' => 'VendorController@createVendor'
]);
Route::post('/vendor/store',[
    'as' => 'vendors.store',
    'uses' => 'VendorController@storeVendor'
]);
Route::get('/vendor/show',[
    'as' => 'vendors.show',
    'uses' => 'VendorController@showVendor'
]);
Route::patch('/vendor/edit/{id}',[
    'as' => 'vendors.edit',
    'uses' => 'VendorController@editVendor'
]);
Route::post('/vendor/update/{id}',[
    'as' => 'vendors.update',
    'uses' => 'VendorController@updateVendor'
]);
Route::get('/vendor/delete/{id}',[
    'as' => 'vendors.delete',
    'uses' => 'VendorController@deleteVendor'
]);
//Promos Route
Route::get('/promo',[
    'as' => 'promos.index',
    'uses' => 'PromoController@index'
]);
Route::get('/promo/create',[
    'as' => 'promos.create',
    'uses' => 'PromoController@createPromo'
]);
Route::post('/promo/store',[
    'as' => 'promos.store',
    'uses' => 'PromoController@storePromo'
]);
Route::get('/promo/show',[
    'as' => 'promos.show',
    'uses' => 'PromoController@showPromo'
]);