<?php

namespace Database\Seeders;

use App\Models\Fach;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FachSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Fach::Create([
            'fach' => 'Mathe'
        ]);
    }
}
