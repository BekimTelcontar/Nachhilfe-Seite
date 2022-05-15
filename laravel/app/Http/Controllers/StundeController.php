<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fach;
use App\Models\Stunde;
use App\Models\User;

class StundeController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showNachhilfeGebenPage(){
        return view('addlesson', [
            'fach' => Fach::all()
        ]);
    }

    public function Registertutoring(Request $request){
        $data = $request->all();
    }
}
