<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class UserCanCreatePersonaTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('addPersona')
                    ->type('UsuarioTest', 'nombre')
                    ->type('11111111', 'dni')
                    ->type('104', 'edad')
                    ->type('Ux/Ui', 'trabajo')
                    ->press('submit')
                    ->seePageIs('/');
        });
    }
}
