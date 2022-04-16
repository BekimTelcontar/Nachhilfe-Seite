<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'benutzername' => 'vmadmin',
            'passwort' => password_hash('sml12345', PASSWORD_DEFAULT),
            'email' => 'vmadmin@google.com',
            'profilbild' => base64_encode(file_get_contents('https://media.geeksforgeeks.org/wp-content/uploads/geeksforgeeks-22.png'))
        ]);

        User::create([
            'benutzername' => 'Rair',
            'passwort' => password_hash('Rair', PASSWORD_DEFAULT),
            'email' => 'Rair@google.com',
            'profilbild' => base64_encode(file_get_contents('public/Bilder/Walter.jpg'))
        ]);
    }
}
