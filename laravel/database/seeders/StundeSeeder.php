<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Stunde;

class StundeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        Stunde::create([
            'kosten' => 17.00,
            'datum' => '2002/11/16',  //YYYY/mm/dd
            'von' => '16:00',
            'bis' => '17:45',
            'fachId' => 1,
            'userId' => 1
        ]);
    }
}
