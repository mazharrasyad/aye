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
Route::get('/registerinvestor','AuthController@registerinvestor');
Route::post('/registerinvestor','AuthController@registinvestor')->name('registerinvestor');


Route::get('/jenis','JenisController@index');
Route::get('/createjenis','JenisController@create');
Route::post('/createjenis','JenisController@createjenis');

