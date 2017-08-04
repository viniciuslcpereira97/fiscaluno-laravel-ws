<?php

/*
|--------------------------------------------------------------------------
| Reviews API Routes
|--------------------------------------------------------------------------
|
| Here is located all reviews api routes
|
*/

Route::group([
    'prefix' => 'reviews',
    'namespace' => 'API\Reviews',
], function() {

    $review_routes = function(){
        Route::get('/', 'ReviewsController@allReviews');
        Route::get('{review_id}', 'ReviewsController@reviewById');
        Route::get('institution/{institution_id}', 'ReviewsController@reviewsByInstitution');
        Route::get('author/{author_id}', 'ReviewsController@reviewsByAuthor');
    };
    
    Route::group(['prefix'  =>  'general'], $review_routes);
    Route::group(['prefix'  =>  'detailed'], $review_routes);
});