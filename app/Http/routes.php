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

Route::get('/', [
    'uses'          => 'MapController@index',
    'as'            => 'maps'
]);

Route::get('/add', [
    'uses'          => 'MapController@add',
    'as'            => 'add.map'
]);

Route::get('/google_map', [
    'uses'          => 'MapController@getGoogle',
    'as'            => 'get.map'
]);
