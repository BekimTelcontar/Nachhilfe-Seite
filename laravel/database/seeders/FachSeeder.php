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
            'fachname' => 'Mathe'
        ]);
        Fach::Create([
            'fachname' => 'Deutsch'
        ]);
        Fach::Create([
            'fachname' => 'Englisch'
        ]);
        Fach::Create([
            'fachname' => 'Franzosisch'
        ]);
        Fach::Create([
            'fachname' => 'Geschichte'
        ]);
        Fach::Create([
            'fachname' => 'Geografie'
        ]);
        Fach::Create([
            'fachname' => 'Physik'
        ]);
        Fach::Create([
            'fachname' => 'Chemie'
        ]);
        Fach::Create([
            'fachname' => 'Biologie'
        ]);
        Fach::Create([
            'fachname' => 'Wirtschaft und Recht'
        ]);
        Fach::Create([
            'fachname' => 'Finanz und Rechnungswesen'
        ]);
        Fach::Create([
            'fachname' => 'Informatik'
        ]);
        Fach::Create([
            'fachname' => 'Musik'
        ]);
        Fach::Create([
            'fachname' => 'Sozialwissenschaften'
        ]);
        Fach::Create([
            'fachname' => 'Bildn. Gestalten'
        ]);
        Fach::Create([
            'fachname' => 'Religion und Ethik'
        ]);
    }
}
