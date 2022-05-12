<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Stunde;
use App\Models\Gebucht;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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

        $user = User::where('benutzername', e($data['benutzername']))->first();

        if($user === null){

            if($data['profilbild'] === null){
                $contents = Storage::disk('local')->get('User.png');
            } else {
                $contents = Storage::disk('local')->put($data['profilbild'], $data['profilbild']);
            }

            User::create([
                'benutzername' => e($data['benutzername']),
                'passwort' => password_hash(e($data['password']), PASSWORD_DEFAULT),
                'email' => e($data['email']),
                'profilbild' => base64_encode($contents)
            ]);

            $user = User::where('benutzername', e($data['benutzername']))->first();

            session()->put('user', $user['id']);
            session()->put('pfp', $user['profilbild']);
            session()->put('pfname', $user['benutzername']);
        }

        return redirect('/');
    }

    public function LoginUser(Request $request){

        $data = $request->all();

        $user = User::where('email', e($data['email']))->first();

        if ($user) {
            if (password_verify(e($data['passwort']), $user['passwort'])) {
                session()->flush();
                session()->put('user', $user['id']);
                session()->put('pfp', $user['profilbild']);
                session()->put('pfname', $user['benutzername']);
                return redirect('/');
            }
        } 
    }

    public function ShowAccountPage(){

        $user = User::where('id', session()->get('user'))->first();
        $stunden = Stunde::where('userId', session()->get('user'))->get();
        $gebucht = Gebucht::where('userId', session()->get('user'))->get();
        
        return view('viewacc', [
            'user' => User::where('id', session()->get('user'))->first(),
            'stunden' => Stunde::where('userId', session()->get('user'))->get(),
            'gebucht' => Gebucht::where('userId', session()->get('user'))->get()
        ]);
    }

    public function ShowUpdatePage(){
        return view('updateacc');
    }

    public function flushSession(){
        session()->flush();
        return redirect('/');
    }
}
