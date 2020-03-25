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
// Auth::routes(['register' => false]);
Auth::routes();
Route::get('/', 'Auth\LoginController@showLoginForm');
Route::get('logout', 'Auth\LoginController@logout');
Route::post('admin-login', 'Auth\LoginController@Login');
// Route::get('login', 'Auth\LoginController@login');


// Route::get('/', 'login');
Route::get('/Dashboard', 'MainPage');

