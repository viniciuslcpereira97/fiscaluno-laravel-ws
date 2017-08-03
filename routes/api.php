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
    Route::get('/general', 'GeneralReviewsController@allReviews');
    Route::get('/general/{review_id}', 'GeneralReviewsController@reviewById');
    Route::get('/general/institution/{institution_id}', 'GeneralReviewsController@reviewsByInstitution');
});