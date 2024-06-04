<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RatingTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Telkomedika.')
                    ->click('@login')
                    ->assertPathIs('/login')
                    ->assertSee('Welcome Back')
                    ->type('email', '1@gmail.com')
                    ->type('password', '123')
                    ->press('@signin')
                    ->assertPathIs('/home')
                    ->visit('/rating')
                    ->assertSee('Rating dan Ulasan')
                    ->press('@tambahrating')
                    ->assertPathIs('/rating/createrating')
                    ->assertVisible('@rate-5')
                    ->click('@rate-5')
                    ->type('ulasan', 'baik')
                    ->press('@submit')
                    ->assertPathIs('/rating')
                    ->visit('/ratingedit')
                    ->press('@edit')
                    ->assertPathIs('/rating/3/edit')
                    ->assertVisible('@rate-3')
                    ->click('@rate-3')
                    ->type('ulasan', 'testing ini')
                    ->press('@submit')
                    ->assertPathIs('/rating')
                    ->visit('/ratingedit')
                    ->press('@delete')
                    ->assertPathIs('/ratingedit')
                    
                    ;
        });
    }
}
