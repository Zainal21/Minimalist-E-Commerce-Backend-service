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

Route::get('/product/search/', 'API\v1\ProductController@search');
Route::get('/product', 'API\v1\ProductController@result');

Route::post('/register', 'API\v1\AuthController@register');
Route::post('/login', 'API\v1\AuthController@login');
Route::group(['middleware' => 'auth:api'], function(){
    Route::get('/product/detail/{slug}', 'API\v1\ProductController@details');
    Route::post('/product/add_to_cart/{id}', 'API\v1\TransactionController@addcart');
    Route::post('/details', 'API\v1\AuthController@details');
});
