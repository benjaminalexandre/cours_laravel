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

Route::get('/test/{name?}', 'PagesController@test');

Route::get('/serie/{serie_id}', 'SeriesController@getSerie')->name('serie');
Route::get('/season/{season_id}', 'SeriesController@getSeason')->name('season');
Route::get('/episode/{episode_id}', 'SeriesController@getEpisode')->name('episode');

Route::get('/users/list', 'PagesController@getUsersList')->name('users_list');

Route::get('admin/serie/edit/{serie_id}', 'Admin\SeriesController@getEdit')->name('serie_edit')->middleware('auth');

Route::post('admin/serie/edit', 'Admin\SeriesController@postEdit')->name('serie_edit_post');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
