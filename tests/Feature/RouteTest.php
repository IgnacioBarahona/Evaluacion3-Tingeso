<?php

/*namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     
    public function testBasicTest()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    
    public function testHome () 
    { 
        $ this-> get ('/') 
            -> assertSee ('Home'); 
    }
}*/
namespace Tests\Feature;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
class RouteTest extends TestCase
{
    public function testHome()
    {
        $this->get('/')
            ->assertSee('Home');
    }
public function testLogin()
    {
        $this->get('/login')
            ->assertSee('Remember Me');
    }
}
