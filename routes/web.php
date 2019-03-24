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
Auth::routes(['register' => false]);

Route::middleware(['admin'])->group(function () {
    Route::resource('products', 'ProductController', ['except' => 'index']);
    Route::get('contact/index', 'ContactController@index')->name('contact.index');
    Route::resource('photos', 'PhotoController', ['except' => 'index']);
});

Route::get('/', 'HomeController@index')->name('home');
Route::get('about', 'AboutController@index')->name('about');
Route::get('contact', 'ContactController@create')->name('contact.create');
Route::post('contact', 'ContactController@store')->name('contact.store');
Route::resource('photos', 'PhotoController', ['only' => 'index']);
Route::resource('products', 'ProductController', ['only' => 'index']);
Route::get('goodman', 'ProductController@goodman')->name('goodman');
Route::get('trane', 'ProductController@trane')->name('trane');
Route::get('american', 'ProductController@american')->name('american');
Route::post('products', 'ProductController@change_prices')->name('products.change_prices');