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
    Route::resource('products', 'ProductController', ['except' => 'index']);
    Route::get('contact/index', 'ContactController@index')->name('contact.index');
});

Route::get('/', 'HomeController@index')->name('home');

Route::resource('products', 'ProductController', ['only' => 'index']);

Route::get('goodman', 'ProductController@goodman')->name('goodman');
Route::get('trane', 'ProductController@trane')->name('trane');

Route::get('about', 'AboutController@index')->name('about');

Route::get('contact', 'ContactController@create')->name('contact.create');
Route::post('contact', 'ContactController@store')->name('contact.store');
