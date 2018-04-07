<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    use DatabaseTransactions;
    
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $usuario = factory(\App\User::class)->create([
                    'name' => 'Diego Gonella',
                    'email' => 'diego@meemba.com.ar'
                ]);

        $this->actingAs($usuario, 'api')
                ->visit('api/user')
                ->see('Diego Gonella')
                ->see('diego@meemba.com.ar');
    }
}
