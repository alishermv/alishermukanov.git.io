<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/post');

        $response->assertStatus(200);
    }
//test1
    public function test_post_id_get_request() {

        $response = $this->get('/post/18');
        $response->assertStatus(200);
    }
    //test2
    public function test_get_unexisted_post() {
        
        $response = $this->get('/post/1000');
        $response->assertStatus(404);
    }
//test3
    public function test_post_response() {
        
        $response = $this->get('/post/18');
        $response->assertViewHas('posts');
    }
}
