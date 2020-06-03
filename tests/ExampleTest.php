<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
   // use DatabaseMigrations;
    use DatabaseTransactions;
    /**
     * A basic functional test example.
     *
     * @return void
     */
    protected $connectionsToTransact = ['mysql_tests'];
    public function testBasicExample()
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
