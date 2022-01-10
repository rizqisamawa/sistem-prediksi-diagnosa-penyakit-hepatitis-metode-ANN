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
    return view('auths.login');
});

Route::get('/login','AuthController@login')->name('login');
Route::post('/postlogin','AuthController@postlogin');
Route::get('/logout','AuthController@logout');

Route::group(['middleware' => 'auth'],function(){
    Route::get('/dashboard','DashboardController@index');
    Route::get('/penyakit','PenyakitController@index');
    Route::get('/hasilprediksi','HasilController@hp');
    Route::get('/hasildiagnosa/hd','HasilController@hd');
    Route::get('/literasi1','literasiController@l1');
    Route::get('/literasi2','literasiController@l2');
    Route::get('/literasi3','literasiController@l3');
    Route::get('/literasi4','literasiController@l4');
    Route::get('/literasi5','literasiController@l5');
    Route::get('/literasi6','literasiController@l6');
    Route::get('/literasi7','literasiController@l7');
    Route::get('/literasi8','literasiController@l8');
    Route::get('/literasi9','literasiController@l9');
    Route::get('/literasi10','literasiController@l10');
    Route::post('/penyakit/create','PenyakitController@create');
    Route::get('/penyakit/{id}/edit','PenyakitController@edit');
    Route::post('/penyakit/{id}/update','PenyakitController@update');
    Route::get('/penyakit/{id}/delete','PenyakitController@delete');

});