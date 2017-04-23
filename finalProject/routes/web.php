<?php



Route::get('/', function () {
    return view('welcome');
});

Route::get('/videos', 'VideoController@index');
