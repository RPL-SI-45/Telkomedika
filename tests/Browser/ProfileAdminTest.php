<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ProfileAdminTest extends DuskTestCase
{
    /**
     * @group ProfileAdmin
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Telkomedika.')
                    ->click('@login')
                    ->assertPathIs('/login')
                    ->assertSee('Welcome Back')
                    ->type('email', 'mite@gmail.com')
                    ->type('password', '123')
                    ->press('@signin')
                    ->assertPathIs('/admin/home')
                    ->click('@profileadmin')
                    ->click('@yourprofile')
                    ->assertPathIs('/profiladmin')
                    ->type('name', 'mite')
                    ->type('telp', '08333')
                    ->type('username', 'mitee')
                    ->attach('@inputfoto', 'D:\NGULI\SEMESTER 6\RPL\TUBES\Telkomedika\storage\app\public\Gambar')
                    ->click('@update')
                    ->visit('/admin/profile')
                    ->assertPathIs('/admin/profile')
                    ->click('@home')
                    ->assertPathIs('/admin/home')
                    ->screenshot('ProfileAdmin')

                    ;
        });
    }
}
