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

Route::get('/', function () {
    return view('welcome');
});

Route::name('admin.')->prefix('admin')->namespace('Admin')->group(function () {
    Route::get('/', 'HomeController@index');

    Route::name('users.')->prefix('user')->group(function () {
        Route::get('/', 'UserController@index')->name('index');
        Route::get('/create', 'UserController@create')->name('create');
        Route::get('/edit/{id}', 'UserController@index')->name('edit');
        Route::post('/store', 'UserController@store')->name('store');
        Route::post('/update/{id}', 'UserController@update')->name('update');
        Route::post('/users_mass_destroy', 'UserController@massDestroy')->name('mass_destroy');
    });

    Route::get('/form', 'CustomerController@form');
});
