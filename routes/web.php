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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/user/create', 'UserController@create');
Route::get('/user/read', 'UserController@read');
Route::put('/user/update', 'UserController@update');
Route::delete('/user/delete', 'UserController@delete');
Route::put('/give/permissions', 'UserController@givePermissions');

Route::post('/book/create', 'BookController@create');
Route::get('/book/read', 'BookController@read');
Route::put('/book/update', 'BookController@update');
Route::delete('/book/delete', 'BookController@delete');
Route::put('/book/reserve', 'BookController@reserve');
Route::put('/book/reserve/cancel', 'BookController@cancelReservation');
Route::post('/create/category', 'BookController@createCategory');

Route::post('/library/create', 'LibraryController@create');
Route::get('/library/read', 'LibraryController@read');
Route::put('/library/update', 'LibraryController@update');
Route::delete('/library/delete', 'LibraryController@delete');

Route::post('/review/create', 'ReviewController@create');
Route::get('/review/read', 'ReviewController@read');
Route::put('/review/update', 'ReviewController@update');
Route::delete('/review/delete', 'ReviewController@delete');
