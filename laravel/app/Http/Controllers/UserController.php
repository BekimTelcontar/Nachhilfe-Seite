<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    public function showRegistrierenPage(){
        return view('register');
    }

    public function RegisterUser(Request $request){

        $data = $request->all();
        dd($data['profilbild']);

        $user = User::where('benutzername', e($data['benutzername']))->first();

        if($user === null){

            User::create([
                'benutzername' => e($data['benutzername']),
                'passwort' => password_hash(e($data['password']), PASSWORD_DEFAULT),
                'email' => e($data['email']),
                'profilbild' => base64_encode(file_get_contents($data['profilbild']->extension(), false))
            ]);

            $user = User::where('benutzername', e($data['benutzername']))->first();

            session()->put('user', $user['id']);
        }

        return redirect('/');
    }

    public function ShowAccountPage(){
        return view('viewacc');
    }


    public function flushSession(){
        session()->flush();
        return redirect('/');
    }
}
