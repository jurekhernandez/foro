<?php

class ExampleTest extends FeatureTestCase
{
    function test_basic_example()
    {

        $user = factory(\App\User::class)->create([
            'name'=>"Jurek Hernandez",
            'email'=>"admin@styde.net", 
            ]);

        $this->actingAs($user,'api')
            ->visit('api/user')
            ->see('Jurek Hernandez')
            ->see('admin@styde.net');
    }
}
