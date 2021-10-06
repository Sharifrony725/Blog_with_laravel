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
// Route::get('/', 'FrontController@index');


Route::name('frontend.')->namespace('Frontend')->group(function () {
    Route::get('/', 'FrontController@index')->name('index');
});
Route::name('backend.')->namespace('Backend')->prefix('backend')->group(function () {
    Route::get('/', 'FrontController@index')->name('index');
    Route::get('/users', 'UsersController@index')->name('users.index');
    Route::get('/users/{id}', 'UsersController@show')->name('users.show');
});
