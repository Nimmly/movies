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
use App\Http\MoviesController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/movies', 'MoviesController@index')->name('all-movies');
Route::get('/movies/create', 'MoviesController@create')->name('create-movie');
Route::get('/movies/{id}', 'MoviesController@show')->name('single-movie');
Route::post('/movies/create', 'MoviesController@store');
