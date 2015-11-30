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

Route::get('/', function () {
    return view('index');
});

Route::get('/practice', function() {

    $data = Array('foo' => 'bar');
    Debugbar::info($data);
    Debugbar::error('Error!');
    Debugbar::warning('Watch out…');
    Debugbar::addMessage('Another message', 'mylabel');

    return 'Practice';

});
Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');

//Items related controller method_exists
Route::get('/items', 'ItemController@Index');
Route::get('/items/create', 'ItemController@getCreate');
Route::post('/items/create', 'ItemController@postCreate');
Route::get('/items/edit/{id?}', 'ItemController@getEdit');
Route::post('/items/edit/{id?}', 'ItemController@postEdit');
Route::get('/items/delete/{id?}', 'ItemController@getDelete');
Route::post('/items/delete/{id?}', 'ItemController@postDelete');
