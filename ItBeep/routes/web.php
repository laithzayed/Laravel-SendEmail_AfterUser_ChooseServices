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

Route::post('/', 'ClientController@index')->name('#');

Route::post('/', 'ClientController@store')->name('form');

//Ajax
Route::get('/users', 'AjaxController@index');
Route::get('/getData/{id}','AjaxController@getData');

