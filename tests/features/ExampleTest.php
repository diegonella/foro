<?php

class ExampleTest extends FeatureTestCase
{
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
