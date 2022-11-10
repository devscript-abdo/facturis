<?php

namespace Tests\Feature\Views\Register;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RegisterTest extends TestCase
{

    /**
     * @viod
     */
    public function test_a_register_view_can_be_rendered()
    {
    
        $view = $this->withViewErrors([
            'name' => ['Please provide a valid name.']
        ])->view('auth.register.index');

        $view->assertSee('Définissez un mot de passe');
        $view->assertSee('Confirmer votre mot de passe');
        $view->assertSee('Créer mon compte et continuer');
    }
}
