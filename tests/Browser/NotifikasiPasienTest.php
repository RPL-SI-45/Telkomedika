<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class NotifikasiPasienTest extends DuskTestCase
{
    /**
     * @group NotifikasiPasien
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
                ->click('@daftarreservasi')
                ->assertPathIs('/daftarreservasi')
                ->click('@editreservasi')
                ->assertPathIs('/antrian/5/edit')
                ->assertSee('Update Data Antrian')
                ->type('no_antrian', '2')
                ->type('nama_pasien', 'Lelan')
                ->select('jenis_kelamin', 'Wanita')
                ->type('no_telp', '1239189')
                ->type('alamat', 'Padang')
                ->type('tanggal_reservasi', '07/06/2024')
                ->select('poli', 'Poli Gigi')
                ->type('keluhan', 'Sakit Gigi')
                ->select('status_pelayanan', 'Menunggu')
                ->doubleClick('@updatereservasi')
                ->assertPathIs('/daftarreservasi')
                ->assertSee('Informasi Antrian Klinik Telkomedika')
                ->click('@profileadmin')
                ->click('@logoutadmin')
                ->assertPathIs('/login')
                ->assertSee('Welcome Back')
                ->type('email', 'lelan@gmail.com')
                ->type('password', '123')
                ->press('@signin')
                ->assertPathIs('/home')
                ->click('@lonceng')
                ->assertPathIs('/notifikasibaru')
                ->assertSee('Notifications')
                ->screenshot('NotifikasiPasien')
            
                ;    
        });
    }
}

