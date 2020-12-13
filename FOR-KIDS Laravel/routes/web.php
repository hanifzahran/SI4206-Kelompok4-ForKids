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

Route::get('/','DashboardController@index')->name('home');
Route::resource('product','ProductController');
Route::get('/pesan-product/{slug}','ProductController@showSlug')->name('product.slug');
Route::get('/delete-product/{id}','ProductController@destroy')->name('product.delete');
Route::resource('order','OrderController');
Route::get('history-pemesanan','OrderController@history')->name('order.history');
Route::get('/delete-order/{id}','OrderController@destroy')->name('order.delete');