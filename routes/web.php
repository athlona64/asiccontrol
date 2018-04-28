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

Route::post('/saveContact', 'IndexController@saveContact');
Route::post('/changePool', 'IndexController@changePool');
Route::post('/changeNetwork', 'IndexController@changeNetwork');

Route::get('/getBalance', 'IndexController@getBalance');

Route::get('/getHash', 'IndexController@getHash');
Route::get('/asic', 'IndexController@asic');
Route::get('/changeMulti', 'IndexController@changeMulti');
Route::get('/asicNetwork', 'IndexController@asicNetwork');
Route::get('/scanIP', 'IndexController@scanIP');
Route::get('/scanIPGetTemp', 'IndexController@scanIPGetTemp');