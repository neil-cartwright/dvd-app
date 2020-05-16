<?php

Route::get('/', 'FilmController@index')->name('index');

/** do i need this? */
Route::get('films/index', 'FilmController@index');

/**
 * no longer using films/search page. All on  index
 */
Route::get('films/search', 'FilmController@search');
Route::post('films/search', 'FilmController@searchFilms');

//

Route::get('films/search/{genre?}', 'FilmController@searchByGenre');
Route::get('films/search/alpha/{letter?}', 'FilmController@searchByAlpha');

/**
 * controls overall ajax search
 */

Route::get('films/search/{what}/{who_when}', 'FilmController@searchDetail');




// Authentication Routes...
Auth::routes();

/**
 * no longer using login page -- delete
 */
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
  Route::get('films/edit/{id}', 'FilmController@edit');
  Route::patch('films/update/{id}', 'FilmController@update');
  Route::get('films/delete/{id}', 'FilmController@destroy');
  Route::get('/home', 'FilmController@index')->name('index');
  Route::get('logout', 'Auth\LoginController@logout');
});
