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


Route::group(['middleware' => 'auth:admin'], function()
{
    //All the routes that belongs to the group goes here
	Route::get('/Dashboard', 'MainPage');
	Route::get('/AddCategory', 'CatlogController@category');
});

