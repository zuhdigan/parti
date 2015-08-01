<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// Bind route parameters.
Route::model('participant', 'Participant');

// Show pages.
Route::get('/', 'ParticipantsController@index');
Route::get('/create', 'ParticipantsController@create');
Route::get('/edit/{participant}', 'ParticipantsController@edit');
Route::get('/delete/{participant}', 'ParticipantsController@delete');

// Handle form submissions.
Route::post('/create', 'ParticipantsController@handleCreate');
Route::post('/edit', 'ParticipantsController@handleEdit');
Route::post('/delete', 'ParticipantsController@handleDelete');