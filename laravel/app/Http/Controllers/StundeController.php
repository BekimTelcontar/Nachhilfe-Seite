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

        return view('home');
    }

    public function showNachhilfeNehmenPage($id){

        $userid = [0];
        $stunden = Stunde::where('fachId', $id)->get();
        
        foreach($stunden as $item){
            array_push($userid,$item['userId']);
        }
        $users = User::where('id',$userid)->get();

        return view('nehmen', [
            'stunden' => $stunden,
            'fach' => Fach::where('id', $id)->first(),
            'users' => User::get()
        ]);
        
    }

    public function showNachhilfegebenPage(){
        return view('geben');
    }
}
