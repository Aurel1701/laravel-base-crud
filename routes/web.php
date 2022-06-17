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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/app', function () {
    return view('app');
});
//Route::get('/comics/{comic}', 'ComicController@show')->name('comics.show');
//Route::get('/comics', 'ComicController@index')->name('comics.index');

Route::resource('comics', 'ComicController');
