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
        $user = factory(\App\User::class)->create([

            //Especifico un nombre específico, ya que faker genera nombres aleatorios
            'name' => 'Mauricio Buffa',
            'email' => 'mauriciobuffa@hotmail.com',
        ]);

        //Asegurar que usuario inicie sesión
        $this->actingAs($user, 'api')
             ->visit('api/user')
             ->see('Mauricio Buffa')
             ->see('mauriciobuffa@hotmail.com');
    }
}
