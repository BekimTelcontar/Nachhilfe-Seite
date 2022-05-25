<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Stunde;
use App\Models\Fach;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //
    public function showHomePage()
    {
        return view('home');
    }
    public function showRegistrierenPage()
    {

        return view('register');
    }
    public function showAnmeldenPage()
    {
        if (Auth::check()) {
            return redirect('/');
        }
        return view('login');
    }


    public function showNachhilfeNehmenPage($id)
    {

        $userid = [];
        $stunden = Stunde::where('fachId', $id)->get();
        $fach = Fach::where('id',$id)->first();
        
        if (!isset($fach)) {
            abort(404);
        }

        foreach ($stunden as $item) {
            array_push($userid, $item['userId']);
        }
        $users = User::all()->find($userid);

        return view('showlessons', [
            'stunden' => $stunden,
            'fach' => Fach::where('id', $id)->first()->fachname,
            'users' => $users
        ]);
    }

    public function showTutorPage($id)
    {
        $user = User::where('id', $id)->first();

        if($user === null){
            abort(404);
        }
        
        return view('viewtutor', [
            'tutor' => $user,
            'stunde' => Stunde::where('userId', $id)->get(),
            'fach' => Fach::get()
        ]);
    }
    public function showForgotPage()
    {
        return view('forgot');
    }
}
