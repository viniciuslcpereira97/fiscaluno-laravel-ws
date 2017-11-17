<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ApiTest extends TestCase
{

    /**
     * Tests all GET method api routes
     * @return [type] [description]
     */
    public function testGETAPIReviewsRoutes()
    {
        foreach(\Route::getRoutes() as $route)
        {
            if($route->action["middleware"] === "api" && in_array('GET', $route->methods))
            {
                $uri = preg_replace('/\{.*\}/', "1", $route->uri);
                echo $uri . "\n";
                $response = $this->get("http://192.241.148.74/{$uri}");
                $response->assertStatus(200);
            }
        }
    }
    
}
