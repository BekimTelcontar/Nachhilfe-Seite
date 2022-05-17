<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fach;
use App\Models\Stunde;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Validation;

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
        
        //dd($request->all());
        $data = $request->validate([
            'fach' => ['numeric'],
            'kosten' => ['numeric'],
            'datum' => ['date'],
            'von' => [''],
            'bis' => [''],
        ]);
    //dd($data);

        Stunde::create([
            'kosten' => e($data['kosten']),
            'datum' => e($data['datum']),
            'von' => e($data['von']),
            'bis' => e($data['bis']),
            'fachId' => e($data['fach']),
            'userId' => Auth::user()['id'],
        ]);
        //dd('were here');
        return redirect('/');
    }
}
