<?php

namespace Database\Seeders;

use App\Models\Auth\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'nom' => 'Elmarzougui',
                'prenom' => 'Abdelghafour',
                'age' => 29,
                'email' => 'abdelgha4or@gmail.com',
                'email_verified_at' => now(),
                'address' => 'casablanca ain chok',
                'telephone' => '0677512753',
                'username' => 'devscript',

                'password' => Hash::make('123456789@'),
                'remember_token' => Str::random(10),
                'city_id' => 1,
            ],
            [
                'nom' => 'Yassine',
                'prenom' => 'HARIT',
                'age' => 24,
                'email' => 'yassine@haymacproduction.ma',
                'email_verified_at' => now(),
                'address' => 'casablanca ain chok',
                'telephone' => '0660408888',
                'username' => 'harit',

                'password' => Hash::make('123456789@'),
                'remember_token' => Str::random(10),
                'city_id' => 1,
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
