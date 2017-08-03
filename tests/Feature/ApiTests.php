<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ApiTests extends TestCase
{

    /**
     * Tests all apis routes
     * @return [type] [description]
     */
    public function testAPIReviewsRoutes()
    {
        foreach(\Route::getRoutes() as $route)
        {
            if($route->action["middleware"] === "api")
            {
                $uri = preg_replace('/\{.*\}/', "1", $route->uri);
                $response = $this->get($uri);
                $response->assertStatus(200);
            }
        }
    }
    
}
