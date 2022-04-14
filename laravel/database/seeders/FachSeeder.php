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
        Fach::Create([
            'fach' => 'Deutsch'
        ]);
        Fach::Create([
            'fach' => 'Englisch'
        ]);
        Fach::Create([
            'fach' => 'Franzosisch'
        ]);
        Fach::Create([
            'fach' => 'Geschichte'
        ]);
        Fach::Create([
            'fach' => 'Geografie'
        ]);
        Fach::Create([
            'fach' => 'Physik'
        ]);
        Fach::Create([
            'fach' => 'Chemie'
        ]);
        Fach::Create([
            'fach' => 'Biologie'
        ]);
        Fach::Create([
            'fach' => 'Wirtschaft und Recht'
        ]);
        Fach::Create([
            'fach' => 'Finanz und Rechnungswesen'
        ]);
        Fach::Create([
            'fach' => 'Informatik'
        ]);
        Fach::Create([
            'fach' => 'Musik'
        ]);
        Fach::Create([
            'fach' => 'Sozialwissenschaften'
        ]);
        Fach::Create([
            'fach' => 'Bildn. Gestalten'
        ]);
        Fach::Create([
            'fach' => 'Religion und Ethik'
        ]);
    }
}
