<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class NotifikasiAdminTest extends DuskTestCase
{
    /**
     * @group NotifikasiAdmin
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
                    ->click('@reservasipasien')
                    ->assertPathIs('/reservasi/create')
                    ->type('nama_pasien', 'Lelan')
                    ->type('no_telp', '1239189')
                    ->select('jenis_kelamin', 'Wanita')
                    ->type('tanggal_reservasi', '07/06/2024')
                    ->select('poli', 'Poli Gigi')
                    ->type('alamat', 'Padang')
                    ->type('keluhan', 'Sakit Gigi')
                    ->click('@buatreservasi')
                    ->assertPathIs('/antrian')
                    ->click('@profilepasien')
                    ->click('@logoutpasien')
                    ->assertPathIs('/login')
                    ->assertSee('Welcome Back')
                    ->type('email', 'mite@gmail.com')
                    ->type('password', '123')
                    ->press('@signin')
                    ->assertPathIs('/admin/home')
                    ->click('@lonceng')
                    ->assertPathIs('/notifadmin')
                    ->assertSee('Notifications')
                    ->screenshot('NotifikasiAdmin')

                    ;
        });
    }
}
