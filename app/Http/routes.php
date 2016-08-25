<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'BlockexplorerController@index');

Route::get('/block/{block}', 'BlockexplorerController@showBlock');

Route::get('/transaction/{transaction}', 'BlockexplorerController@showTransaction');

Route::get('/api', 'APIController@index');

Route::get('/stats', 'StatsController@index');

Route::get('/richlist', 'PagesController@richlist');

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
