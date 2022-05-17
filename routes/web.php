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

Route::get('/', function () {
    return view('product.layouts.main');
});
Route::get('/megadiscount', 'Product\ProductController@getProductsMegaDiscount')->name('megadiscount');
Route::get('/discount', 'Product\ProductController@getProductsDiscount')->name('discount');
Route::get('/zero', 'Product\ProductController@getProductsZero')->name('zero');
Route::get('/bestrated', 'Product\ProductController@getProductsBestRated')->name('bestrated');
Route::get('/greatprice', 'Product\ProductController@getProductsGreatPrice')->name('greatprice');
Route::get('/greatquality', 'Product\ProductController@getProductsGreatQuality')->name('greatquality');
Route::get('/newproduct', 'Product\ProductController@getProductsNewProduct')->name('newproduct');
Route::get('/productspromotion', 'Product\ProductController@getProductsPromotion')->name('promotion');
Route::get('/promotionalproduct', 'Product\ProductController@getProductsPromotionalProduct')->name('promotionalproduct');
Route::get('/recommendedproduct', 'Product\ProductController@getProductsRecommendedProduct')->name('recommendedproduct');
Route::get('/sale', 'Product\ProductController@getProductsSale')->name('sale');
Route::get('/vendorrecomendation', 'Product\ProductController@getProductsVendorRecomendation')->name('vendorrecomendation');
Route::get('/test', 'Product\ProductController@test')->name('test');

