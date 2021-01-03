<?php

use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes FORKIDS ~
|--------------------------------------------------------------------------
|
*/

Route::get('/', function() {
    return redirect('home');
});
Route::get('ajax-cart-view','Ajax@cart_view')->name('ajax.cart.view');
Route::get('ajax-cart-action/{type}','Ajax@cart_action')->name('ajax.cart.action');
Route::get('/logout', function () {
    Auth::logout();
    return redirect('login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
    
Route::get('transaksi-checkout','TransaksiController@checkout')->name('transaksi.checkout');
Route::resource('product', 'ProductController');
Route::get('product-delete/{id}', 'ProductController@destroy')->name('product.delete');

Route::resource('dongeng', 'DongengController');
Route::get('dongeng-list', 'DongengController@child_index')->name('dongeng.child_index');
Route::get('dongeng-detail/{id}', 'DongengController@detail')->name('dongeng.detail');
Route::get('dongeng-delete/{id}', 'DongengController@destroy')->name('dongeng.delete');

Route::resource('transaksi','TransaksiController');
Route::get('transaksi-checkout','TransaksiController@checkout')->name('transaksi.checkout');
Route::get('invoice/{no_unik}','TransaksiController@invoice')->name('transaksi.invoice');

Route::resource('pembayaran','PembayaranController');

Route::resource('event','EventController');
Route::get('event-delete/{id}', 'EventController@destroy')->name('event.delete');

Route::resource('activity', 'ActivityChildController');
Route::get('activity-delete/{id}', 'ActivityChildController@destroy')->name('activity.delete');

Route::resource('game', 'GameController');
Route::get('game-list', 'GameController@child_index')->name('game.child_index');
Route::get('game-delete/{id}', 'GameController@destroy')->name('game.delete');

Route::resource('video', 'VideoController');
Route::get('video-list', 'VideoController@child_index')->name('video.child_index');
Route::get('video-detail/{id}', 'VideoController@detail')->name('video.detail');
Route::get('video-delete/{id}', 'VideoController@destroy')->name('video.delete');

Route::resource('merchandise','MerchandiseController');
Route::get('merchandise-delete/{id}', 'MerchandiseController@destroy')->name('merchandise.delete');

Route::resource('competition','CompetitionController');

Route::get('evaluation-competition','CompetitionController@evaluation')->name('competition.evaluation');
Route::post('evaluation-competition-action/{id}','CompetitionController@evaluation_action')->name('competition.evaluation.action');
Route::get('my-competition','CompetitionController@history')->name('my.competition');
Route::get('competition-delete/{id}', 'CompetitionController@destroy')->name('competition.delete');
Route::get('competition-join/{id}', 'CompetitionController@join')->name('competition.join');
Route::get('competition-submission/{id}', 'CompetitionController@submission')->name('competition.submission');
Route::post('competition-submission-action/{id}', 'CompetitionController@submission_action')->name('competition.submission.action');

Route::get('/panel', 'HomeController@panel')->name('panel.home');
Route::get('/child-panel', 'HomeController@child')->name('panel.child');
});
