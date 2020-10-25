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

Route::get('/', 'FrontViewController@index')->name('welcome');
Route::get('/all-products', 'FrontViewController@allProducts')->name('all-products');


Auth::Routes(["register"=>false]);

Route::get('/category', 'CategoryController@index')->name('home');

Route::get('/category', 'CategoryController@index')->name('home')->middleware('auth');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/category', 'CategoryController@index')->name('category');

    Route::get('/products', 'ProductController@index')->name('product');

    Route::get('/create-product', 'ProductController@create')->name('create-product');
    Route::post('/create-product', 'ProductController@store')->name('create-product');
    Route::get('/product/edit/{id}', 'ProductController@edit');
    Route::match(['put', 'patch'],'/product/update/{id}', 'ProductController@update');
    Route::get('/product/destroy/{id}', 'ProductController@destroy');

    //brand
    Route::get('/brand', 'BrandController@index')->name('brand');
    Route::get('/brand/create', 'BrandController@create')->name('create-brand');
    Route::post('/brand/store', 'BrandController@store')->name('create-brand');

});

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});

