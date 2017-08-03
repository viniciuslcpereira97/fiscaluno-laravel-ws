<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group([
    'prefix' => 'reviews',
    'namespace' => 'API\Reviews',
], function() {
    
    Route::group([
        'prefix' => 'general'
    ], function(){
        Route::get('/', 'ReviewsController@allReviews');
        Route::get('{review_id}', 'ReviewsController@reviewById');
        Route::get('institution/{institution_id}', 'ReviewsController@reviewsByInstitution');
        Route::get('author/{author_id}', 'ReviewsController@reviewsByAuthor');
    });

    Route::group([
        'prefix' => 'detailed'
    ], function() {
        Route::get('/', 'ReviewsController@allReviews');
        Route::get('{review_id}', 'ReviewsController@reviewById');
        Route::get('institution/{institution_id}', 'ReviewsController@reviewsByInstitution');
        Route::get('author/{author_id}', 'ReviewsController@reviewsByAuthor');
    });

});