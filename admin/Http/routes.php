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

Route::get('/', 'HomeController@dashboard');

Route::get('/login', 'Auth\AuthController@login');

Route::post('/login', 'Auth\AuthController@postLogin');

Route::get('/logout', 'Auth\AuthController@logout');

Route::resource('/members', 'MembersController');

Route::resource('/teachers', 'TeachersController');

Route::post('/images/upload', 'ImagesController@upload');

Route::get('/about/school/{type}', 'AboutController@showSchool');

Route::post('/about/school/{type}', 'AboutController@updateSchool');

Route::resource('announcements', 'AnnouncementsController');

Route::resource('events', 'EventsController');