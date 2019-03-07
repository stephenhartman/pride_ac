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

// Replace Auth routes with individual routes to get rid of regster
//Auth::routes();
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');
//Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
//Route::post('register', 'Auth\RegisterController@register');

Route::middleware(['admin'])->group(function () {
    Route::resource('products', 'ProductController', ['except' => 'index']);
    Route::get('contact/index', 'ContactController@index')->name('contact.index');
});

Route::get('/', 'HomeController@index')->name('home');

Route::resource('products', 'ProductController', ['only' => 'index']);

Route::get('goodman', 'ProductController@goodman')->name('goodman');
Route::get('trane', 'ProductController@trane')->name('trane');
Route::get('american', 'ProductController@american')->name('american');

Route::get('about', 'AboutController@index')->name('about');

Route::get('contact', 'ContactController@create')->name('contact.create');
Route::post('contact', 'ContactController@store')->name('contact.store');

Route::post('products', 'ProductController@change_prices')->name('products.change_prices');
