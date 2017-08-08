<?php

/*
|--------------------------------------------------------------------------
| Ranking API routes
|--------------------------------------------------------------------------
|
| Here is located all ranking API routes
|
*/

Route::group([
    'prefix' => 'ranking',
    'namespace' => 'API'
], function() {
    Route::get('/{top_limit}', 'RankingController@getGeneralRanking');
});