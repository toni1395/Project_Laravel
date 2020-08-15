<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');

Route::get('/tanyajawab', 'TanyajawabController@index');

//pertanyaan
Route::get('/pertanyaan', 'PertanyaanController@index');
Route::get('/pertanyaan/create', 'PertanyaanController@create');
Route::get('/pertanyaan/{pertanyaan}', 'PertanyaanController@show');
Route::post('/pertanyaan', 'PertanyaanController@store');
Route::delete('/pertanyaan/{pertanyaan}','PertanyaanController@destroy');
Route::get('pertanyaan/{pertanyaan}/edit','PertanyaanController@edit');
Route::patch('/pertanyaan/{pertanyaan}' , 'PertanyaanController@update');

