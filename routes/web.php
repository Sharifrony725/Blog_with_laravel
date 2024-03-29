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
Route::get('/', 'Backend\FrontController@index');
Route::get('/register', 'Backend\FrontController@showRegistrationForm')->name('register');
Route::post('/register', 'Backend\FrontController@processRegistration');
Route::get('/post', 'Backend\FrontController@post');


//Route::get('/', 'Backend\FrontController@index');
