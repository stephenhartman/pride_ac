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

Auth::routes();

Route::middleware(['admin'])->group(function () {
    Route::resource('products/goodman', 'GoodmanController', ['except' => 'index', 'show']);
});

Route::get('/', 'HomeController@index')->name('home');

Route::get('products', 'ProductController@index')->name('products');
Route::resource('products/goodman', 'GoodmanController', ['only' => 'index', 'show']);

Route::get('about', 'AboutController@index')->name('about');

Route::get('contact', 'ContactController@create')->name('contact.create');
Route::post('contact', 'ContactController@store')->name('contact.store');
