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


// Route::group(['middleware' => 'auth'], function(){
  
  // });
Route::get('/', 'AuthAdminController@view_login')->name('login');
Route::post('/panel/login', 'AuthAdminController@login');
// Route::post('/panel/auth/login', 'AuthAdminController@login');

  Route::group(['prefix' => 'admin'], function(){
  Route::get('/', 'DashboardController@index');
  Route::get('/user', 'UserController@index');
  Route::get('/product', 'ProductController@index');
  Route::get('/product/create', 'ProductController@create');
  Route::get('/product/edit/', 'ProductController@edit');

  Route::get('/gallery', 'GalleryController@index');
  Route::get('/gallery/create', 'GalleryController@create');
  Route::get('/transaction', 'TransactionController@index');


  Route::get('/logout', 'AuthAdminController@logout');
});