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

Route::get('/', '\App\Http\Controllers\FilialController@index')->name('filials.index');
Route::get('/create', '\App\Http\Controllers\FilialController@create')->name('filials.create');
Route::post('/store', '\App\Http\Controllers\FilialController@store')->name('filials.store');
Route::get('/delete/{filial}', '\App\Http\Controllers\FilialController@delete')->name('filials.delete');
Route::delete('/destroy/{filial}', '\App\Http\Controllers\FilialController@destroy')->name('filials.destroy');
