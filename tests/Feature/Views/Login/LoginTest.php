<?php

namespace Tests\Feature\Views\Login;

use Tests\TestCase;

class LoginTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_a_login_view_can_be_rendered()
    {
        $view = $this->withViewErrors([
            'name' => ['Please provide a valid name.'],
        ])->view('auth.login');

        $view->assertSee('Create an account');
        $view->assertSee('FACTURIS');
        $view->assertSee('Sign in');
    }
}
