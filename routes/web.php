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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/registernasabah','AuthController@registernasabah');
Route::post('/registernasabah','AuthController@registnasabah')->name('registernasabah');
Route::get('/registerinvestor','AuthController@registerinvestor');
Route::post('/registerinvestor','AuthController@registinvestor')->name('registerinvestor');

Route::get('/jenis','JenisController@index');
Route::get('/createjenis','JenisController@create');
Route::post('/createjenis','JenisController@createjenis');
Route::delete('/jenis/{id}/delete','JenisController@delete');

Route::get('/pengajuanusaha','PengajuanusahaController@index');
Route::get('/createpengajuanusaha','PengajuanusahaController@create');
Route::post('/createpengajuanusaha','PengajuanusahaController@createpengajuanusaha');
Route::delete('/pengajuanusaha/{id}/delete','PengajuanusahaController@delete');

Route::get('/validasi','ValidasiController@index');
Route::get('validate/legalitas/{id}','ValidasiController@statuslegal');
Route::get('validate/prospek/{id}','ValidasiController@statusprospek');
Route::get('validate/budget/{id}','ValidasiController@statusbudget');
Route::delete('/validasi/{id}/delete','ValidasiController@delete');

Route::get('/modal','ModalController@index');
Route::get('/createmodal','ModalController@create');
Route::post('/createmodal','ModalController@createmodal');

Route::delete('/modal/{id}/delete','ModalController@delete');

Route::get('/usahaku','UsahaController@index');
Route::get('/createusaha','UsahaController@create');
Route::post('/createusaha','UsahaController@createusaha');

Route::delete('/usaha/{id}/delete','UsahaController@delete');
