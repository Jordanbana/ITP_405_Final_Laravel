<?php

//Main Videos Page
Route::get('/', 'VideoController@index');
Route::get('/videos', 'VideoController@index');

//Form to add videos
Route::get('/videos/new', 'VideoController@create');

//Submitting new Videos
Route::post('/videos','VideoController@store');
