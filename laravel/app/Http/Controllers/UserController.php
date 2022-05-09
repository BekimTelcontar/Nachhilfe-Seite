<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Stunde;
use App\Models\Fach;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    public function showRegistrierenPage(){
        return view('register');
    }
    public function showAnmeldenPage(){
        return view('login');
    }

    public function RegisterUser(Request $request){

        $data = $request->all();
        //dd($data['profilbild']);

        $user = User::where('benutzername', e($data['benutzername']))->first();

        if($user === null){

            User::create([
                'benutzername' => e($data['benutzername']),
                'passwort' => password_hash(e($data['password']), PASSWORD_DEFAULT),
                'email' => e($data['email']),
                'profilbild' => 'ra'//base64_encode(file_get_contents($data['profilbild']->extension(), false))
            ]);

            $user = User::where('benutzername', e($data['benutzername']))->first();

            session()->put('user', $user['id']);
        }

        return redirect('/');
    }

    public function LoginUser(Request $request){
        //session()->put('user',2);

        $data = $request->all();

        $user = User::where('email', e($data['email']))->first();

        if ($user) {
            if (password_verify(e($data['passwort']), $user['passwort'])) {
                session()->flush();
                session()->put('user', $user['id']);
                return view('home', [
                    'fach' => Fach::get()
                ]);
            }
        }
        

    }

    public function ShowAccountPage(){

        $user = User::where('id', session()->get('user'))->first();
        $stunden = Stunde::where('userId', session()->get('user'))->get();
        dd($stunden);
        return view('viewacc');
    }

    public function ShowUpdatePage(){
        return view('updateacc');
    }

    public function flushSession(){
        session()->flush();
        return redirect('/');
    }
}
