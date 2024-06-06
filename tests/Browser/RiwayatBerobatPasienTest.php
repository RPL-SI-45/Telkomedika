<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RiwayatBerobatPasienTest extends DuskTestCase
{
    /**
     * @group riwayatberobatpasien
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Telkomedika.')
                    ->click('@login')
                    ->assertPathIs('/login')
                    ->assertSee('Welcome Back')
                    ->type('email', 'lelan@gmail.com')
                    ->type('password', '123')
                    ->press('@signin')
                    ->assertPathIs('/home')
                    ->click('@riwayatpasien')
                    ->assertPathIs('/medicalrecords')
                    ->assertSee('Riwayat Berobat Pasien')
                    ->click('@viewriwayat')
                    ->assertPathIs('/medicalrecords/3/view')
                    
                    ;
        });
    }
}
