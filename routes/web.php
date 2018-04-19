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

Route::get('/teams', 'TeamsController@index')->name('all-teams');

Route::get('/teams/{id}', ['as' => 'single-team', 'uses' => 'TeamsController@show']);

Route::get('/players', 'PlayersController@index')->name('all-players');

Route::get('/players/{id}', ['as' => 'single-player', 'uses' => 'PlayersController@show']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
