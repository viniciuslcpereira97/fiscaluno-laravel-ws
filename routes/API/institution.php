<?php

/*
|--------------------------------------------------------------------------
| Institution API Routes
|--------------------------------------------------------------------------
|
| comment
|
*/

Route::group([
    'prefix' => 'institutions',
    'namespace' => 'API'
], function() {
    Route::get('/', 'InstitutionController@all');
    Route::get('/{institution_id}', 'InstitutionController@byId');
    Route::get('/general/{institution_id}', 'InstitutionController@getGeneralRate');
    Route::get('/rates/{institution_id}', 'InstitutionController@getRates');
});