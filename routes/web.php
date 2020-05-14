<?php

Route::get('/', 'FilmController@index')->name('index');
Route::get('films/index', 'FilmController@index');
Route::get('films/search', 'FilmController@search');
Route::post('films/search', 'FilmController@searchFilms');
Route::get('films/search/{genre?}', 'FilmController@searchByGenre');
Route::get('films/search/alpha/{letter?}', 'FilmController@searchByAlpha');
Route::get('films/search/{what}/{who_when}', 'FilmController@searchDetail');

Auth::routes();
// Authentication Routes...
Route::get('login', [
  'as' => 'login',
  'uses' => 'FilmController@showLoginForm'
]);
// Route::post('login', 'HomeController@index')->name('login');
Route::post('login', [
  'as' => '',
  'uses' => 'Auth\LoginController@login'
]);
/* must be logged in to create/update/delete */
Route::group(['middleware' => 'auth'], function () {

  Route::get('films/show/{id}', 'FilmController@show');
  Route::get('films/create', 'FilmController@create');
  Route::post('films/create', 'FilmController@store');
  Route::patch('films/update/{id}', 'FilmController@update');
  Route::get('films/delete/{id}', 'FilmController@destroy');
  Route::get('/home', 'FilmController@index')->name('index');
  Route::get('logout', 'Auth\LoginController@logout');
});
