<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UserCanCreatePersonaTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->visit('/addPersona')
        	 ->type('UsuarioTest', 'nombre')
			 ->type('11111111', 'dni')
        	 ->type('104', 'edad')
        	 ->type('Ux/Ui', 'trabajo')
        	 ->press('submit')
        	 ->seePageIs('/');
    }
}
