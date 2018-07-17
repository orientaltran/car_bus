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

Route::get('/introduce', function () {
    return view('introduce');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/product', 'ProductController@getIndex');

Route::get('/users/register', function () {
    return view('users.register');
});

// resource controller car is car.blade.php
Route::resource('car', 'CarController');
Route::resource('manufacturer', 'ManufacturerController');
Route::get('/addcomment','CommentController@getIndex');

Route::post('/users/register/store','UserController@storeRegister');
Route::get('/users/login', 'UserController@login');
Route::post('/users/login/attempt', 'UserController@loginAttempt');
Route::get('/users/logout','UserController@logout');
Route::get('/users/show/account', 'UserController@account');
Route::get('/users/show/account/edit','UserController@accountedit');
Route::post('show/edit/account','UserController@accountupdate');
Route::get('/users/show/account/passworddit','UserController@passwordedit');
Route::post('/users/show/account/change','UserController@changePassword');

Route::get('admin/user/show/account','UserController@account');

Route::get('/cars/searchadvanced', function () {
    return view('cars.searchadvanced');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
