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

Route::get('/', 'FilmController@index')->name('film.index');
Route::get('/films', 'FilmController@films')->name('film.films');
Route::get('/cartoons', 'FilmController@cartoons')->name('film.cartoons');
Route::get('/films/{film}', 'FilmController@show')->name('film.show');


Route::get('/search', 'FilmController@search')->name('film.search');



// Route::get('/test', 'FilmController@show')->name('film.show');
