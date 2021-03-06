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

require __DIR__.'/auth.php';

Route::get('/', 'HomeController@home')->name('home');

Route::prefix('admin')->name('admin.')->namespace('Admin')->middleware('auth', 'admin')->group(function() {
    Route::get('/dashboard', 'DashboardController@dashboard')->name('dashboard');
    Route::get('/configuration', 'DashboardController@configuration')->name('configuration');

    Route::prefix('producer')->name('producer.')->group(function() {
        Route::get('list', 'ProducerController@list')->name('list');
        Route::get('add', 'ProducerController@add')->name('add');
        Route::get('edit/{id?}', 'ProducerController@edit')->name('edit');
        Route::post('save/{id?}', 'ProducerController@save')->name('save');
        Route::get('delete/{id?}', 'ProducerController@delete')->name('delete');
    });
});
