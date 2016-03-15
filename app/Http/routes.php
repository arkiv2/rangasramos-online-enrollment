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
Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');

    Route::get('student/{id}' , 'StudentController@index');
    Route::get('section/{name}' , 'SectionController@index');
    Route::get('subject/{code}' , 'SubjectController@index');
    Route::get('enroll', 'EnrollmentController@index');


});
