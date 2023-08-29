<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', 'App\Http\Controllers\OffersController@index')->name('offers.index');
Route::get('/create', 'App\Http\Controllers\OffersController@create')->name('offers.create');
Route::post('/insert', 'App\Http\Controllers\OffersController@insert')->name('offers.insert');
Route::get('/list', 'App\Http\Controllers\OffersController@list')->name('offers.list');
Route::get('/delete/{id}', 'App\Http\Controllers\OffersController@delete')->name('offers.delete');
Route::get('/show/{id}', 'App\Http\Controllers\OffersController@show')->name('offers.show');
