<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fach;
use App\Models\Stunde;
use App\Models\User;

class StundeController extends Controller
{
    //

    

    public function Registertutoring(Request $request){
        $data = $request->all();
    }
}
