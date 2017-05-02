<?php

//Main Videos Page
Route::get('/', 'VideoController@index');
Route::get('/videos', 'VideoController@index');

//Form to add videos
Route::get('/videos/new', 'VideoController@create');

//Submitting new Videos
Route::post('/videos','VideoController@store');

//get single view of videos
Route::get('/videos/{id}', 'VideoController@view');
//Vote Up
Route::get('/videos/voteup/{id}', 'VideoController@voteUp');


//Submitting new comments
Route::post('/videos/comments/{id}','VideoController@storeComments');

//Sign up
Route::get('/signup', 'SignupController@index');
Route::post('/signup', 'SignupController@signup');

//Login routes
Route::get('/login', 'LoginController@index');
Route::post('/login', 'LoginController@login');
