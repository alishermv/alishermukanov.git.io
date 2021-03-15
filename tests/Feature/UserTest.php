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
    public function user_test1() {

        $response = $this->get('/post');
        $response->assertStatus(200);
    }
    public function user_test2() {
        
        $response = $this->get('/post/5');
        $response->assertStatus(404);
    }

    public function user_test3() {
        
        $response = $this->get('/post/5');
        $response->assertViewHas('post');
    }
}
