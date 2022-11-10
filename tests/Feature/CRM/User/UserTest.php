<?php

namespace Tests\Feature\CRM\User;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase;

 
    public function test_can_create_a_user()
    {
        $user = User::factory(2)->create();
    
        $this->assertDatabaseCount('users', 2);
    }

    public function test_user_with_email_exists()
    {
        $user = User::factory()->create(['email'=>'abdo@gmail.com']);

        $this->assertDatabaseHas('users', [
            'email' => 'abdo@gmail.com',
        ]);
    }


    public function test_user_exists()
    {
        $user = User::factory()->create();
 
        $this->assertModelExists($user);
    }

    public function test_delete_user_done()
    {
        $user = User::factory()->create();
 
        $user->delete();
        
        $this->assertModelMissing($user);
    }
}
