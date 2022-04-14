<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fach;
use App\Models\Stunde;
use App\Models\User;

class StundeController extends Controller
{
    //

    public function showHomePage()
    {

        return view('home', [
            'fach' => Fach::get()
        ]);
    }

    public function showNachhilfeNehmenPage($id){
        $stunden = Stunde::where('fachId', $id)->get();
        $fach = Fach::where('id', $id);
        
    }
}
