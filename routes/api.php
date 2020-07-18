<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('v1/checkout', 'API\v1\CheckoutController@checkout');
Route::get('v1/transcation-details/{id}', 'API\v1\CheckoutController@details');
// 

Route::post('v1/register', 'API\v1\AuthController@register');
Route::post('v1/login', 'API\v1\AuthController@login');
Route::group(['middleware' => 'auth:api'], function(){
    Route::get('v1/product/search/', 'API\v1\ProductController@search');
    Route::get('v1/product', 'API\v1\ProductController@result');
    Route::get('v1/product/detail/{slug}', 'API\v1\ProductController@details');
    Route::post('v1/product/add_to_cart/{id}', 'API\v1\TransactionController@addcart');
    Route::post('v1/details', 'API\v1\AuthController@details');
});
