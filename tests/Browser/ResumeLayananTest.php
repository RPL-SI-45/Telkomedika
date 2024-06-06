<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ResumeLayananTest extends DuskTestCase
{
    /**
     * @group resume
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
                    ->click('@resume')
                    ->assertPathIs('/resumelayanan')
                    ->assertSee('Resume Layanan')
                    ->click('@buatresume')
                    ->assertPathIs('/resumelayanan/create')
                    ->assertSee('Pelaporan Resume Kinerja Telkomedika')
                    ->type('nama_resume', 'Resume Layanan Juli')
                    ->type('tanggal_dibuat', '05/07/2024')
                    ->type('kinerja_dokter', 'baik')
                    ->type('kinerja_operasional', 'baik')
                    ->type('penyakit_terbanyak', 'demam')
                    ->click('@kirim')
                    ->assertPathIs('/resumelayanan')
                    ->click('@view')
                    ->assertPathIs('/resumelayanan/viewresume/1')
                    ->visit('/resumelayanan')
                    ->click('@edit')
                    ->assertPathIs('/resumelayanan/1/edit')
                    ->type('kinerja_dokter', 'baik')
                    ->type('kinerja_operasional', 'baik')
                    ->type('penyakit_terbanyak', 'demam')
                    ->click('@kirimedit')
                    ->visit('/resumelayanan')
                    ->click('@delete')

                    
                    ;
                    
        });
    }
}
