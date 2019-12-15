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


Route::get('/', 'FrontController@index')->name('index');
Route::get('/kontakt', 'FrontController@contact')->name('contact');

Route::namespace('Admin')->name('admin.')->prefix('administracja')->group(function () {

    Route::get('/', 'DashboardController@index')->name('index');
    Route::prefix('dashboard')->name('dashboard.')->group(function () {
        Route::get('/', 'DashboardController@index')->name('index');
    });


    Route::get('login', 'LoginController@index')->name('login');

});
Auth::routes();
