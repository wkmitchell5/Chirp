<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/', 'PagesController@home');

Route::get('about', 'PagesController@about');

Route::get('players', 'PlayersController@index');

Route::get('players/{player}', 'PlayersController@show');

Route::post('players/{player}/notes', 'NotesController@store');

Route::get('notes/{note}/edit', 'NotesController@edit');

Route::patch('notes/{note}', 'NotesController@update');