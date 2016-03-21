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

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

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
    Route::get('/', 'HomeController@index');
    Route::controller('/about', 'AboutController');
    Route::controller('/members', 'MembersController');
    Route::controller('/teachers', 'TeachersController');
    Route::controller('/tours', 'ToursController');
    Route::get('/contact', function(){
    	return view('contact');
    });
    Route::resource('/events', 'EventsController');

    Route::resource('/announcements', 'AnnouncementsController');

    Route::get('/community/supporters',function(){
        return view('community.supporters');
    });
    Route::get('/teaching-approach', function(){
        return view('teaching.approach');
    });
    Route::get('/teaching-report', function(){
        return view('teaching.report');
    });
    Route::get('/teaching-projects', function(){
        return view('teaching.projects');
    });
});
