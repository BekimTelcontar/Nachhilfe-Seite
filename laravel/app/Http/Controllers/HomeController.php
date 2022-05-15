<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Stunde;
use App\Models\Fach;

class HomeController extends Controller
{
    //
    public function showHomePage()
    {
        return view('home');
    }
    public function showRegistrierenPage(){
        return view('register');
    }
    public function showAnmeldenPage(){
        return view('login');
    }

    public function showNachhilfeNehmenPage($id){

        $userid = [];
        $stunden = Stunde::where('fachId', $id)->get();

        foreach($stunden as $item){
            array_push($userid,$item['userId']);
        }
        $users = User::all()->find($userid);
        //dd(Fach::where('id', $id)->first()->fachname);
        
        return view('showlessons', [
            'stunden' => $stunden,
            'fach' => Fach::where('id', $id)->first()->fachname,
            'users' => $users
        ]);
        
    }

    public function showNachhilfeGebenPage(){
        return view('addlesson', [
            'fach' => Fach::all()
        ]);
    }

    public function flushSession(){
        session()->flush();
        return redirect('/');
    }
}