<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
            'benutzername' => 'Noah',
            'password' => Hash::make('C3e4r5t6z7u8_'),
            'email' => 'inazel.az.ri@gmail.com',
            'profilbild' => base64_encode(file_get_contents('public/Bilder/Saulgoodman.jpg'))
        ]);

        User::create([
            'benutzername' => 'Rair',
            'password' => Hash::make('RairRair'),
            'email' => 'Rair@gmail.com',
            'profilbild' => base64_encode(file_get_contents('public/Bilder/Walter.jpg'))
        ]);
    }
}
