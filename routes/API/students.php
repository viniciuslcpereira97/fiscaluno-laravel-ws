<?php

/*
|--------------------------------------------------------------------------
| Students API Routes
|--------------------------------------------------------------------------
|
| Here is located all students api routes
|
*/

Route::group([
    'prefix' => 'students',
    'namespace' => 'API\Students'
], function() {

    Route::get('/', 'StudentsController@allStudents');
    Route::get('/{student_id}', 'StudentsController@studentById');
    Route::post('/new', 'StudentsController@newStudent');

});