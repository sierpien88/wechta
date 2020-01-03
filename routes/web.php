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


    Route::prefix('newsfeed')->name('newsfeed.')->group(function () {
        Route::get('/', 'NewsfeedController@index')->name('index');
        Route::get('/edit/{newsfeed}', 'NewsfeedController@edit')->name('edit');
        Route::post('/update/{newsfeed}', 'NewsfeedController@update')->name('update');
        Route::get('/create', 'NewsfeedController@create')->name('create');
        Route::post('/store', 'NewsfeedController@store')->name('store');
        Route::get('/destroy/{newsfeed}', 'NewsfeedController@destroy')->name('destroy');
    });

    Route::prefix('apartment')->name('apartment.')->group(function () {
        Route::get('/', 'ApartmentController@index')->name('index');
        Route::get('/edit/{apartment}', 'ApartmentController@edit')->name('edit');
        Route::post('/update/{apartment}', 'ApartmentController@update')->name('update');
        Route::get('/create', 'ApartmentController@create')->name('create');
        Route::post('/store', 'ApartmentController@store')->name('store');
        Route::get('/destroy/{apartment}', 'ApartmentController@destroy')->name('destroy');
    });

});
Auth::routes();
