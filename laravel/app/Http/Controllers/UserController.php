<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Stunde;
use App\Models\Gebucht;
use Illuminate\Auth\Events\Login;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

use Illuminate\Auth\Passwords;
use Illuminate\Validation;

use function PHPUnit\Framework\isNull;

class UserController extends Controller
{
    //


    public function RegisterUser(Request $request)
    {

        //Validate input
        $data = $request->validate([
            'profilbild' => 'image', 'dimensions:max_width=800, max_height=1000',
            'benutzername' => 'required|min:3', 'string',
            'password' => 'required|min:8', 'string',
            'email' => 'required|email:rfc,dns',
        ]);

        //Make Errormessage appear
        /*
        $errors = $this->errors();
        dd($errors);
        foreach($errors->all() as $message){

        }
        */

        //Try and send email adress to confirm it is actually there

        //
        $user1 = User::where('benutzername', e($data['benutzername']))->first();
        $user2 = User::where('email', e($data['email']))->first();

        if ($user1 === null && $user2 === null) {

            if (!isset($data['profilbild'])) {
                $contents = Storage::disk('local')->get('User.png');
            } else {
                $contents = file_get_contents($data['profilbild']);
            }

            User::create([
                'benutzername' => e($data['benutzername']),
                'passwort' => Hash::make(e($data['password'])),
                'email' => e($data['email']),
                'profilbild' => base64_encode($contents)
            ]);
            $user = User::where('benutzername', e($data['benutzername']))->first();

            session()->flush();
            session()->put('user', $user['id']);
            session()->put('pfp', base64_encode($contents));
            session()->put('pfname', $user['benutzername']);
            //auth::loginUsingId($user['id']);
            //Auth::login($user);

            return redirect('/');
        }

        return view('register', [
            'msg' => 'Anmeldung ungültig'
        ]);
    }

    public function LoginUser(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|email:rfc,dns',
            'passwort' => 'required|min:8', 'string',
        ]);

        

        $user = User::where('email', e($data['email']))->first();

        if(Auth::attempt(['email' => $user['email'], 'passwort' => $user['passwort']])){
            dd('i did it');
        } else {
            dd('it didnt');
        }

        if ($user) {
            if (Hash::check(e($data['passwort']), $user['passwort'])) {
                if (Hash::needsRehash($user['passwort'])) {
                    User::where('id', $user['id'])->update(['passwort' => Hash::make(e($data['passwort']))]);
                }
                Auth::login($user);
                dd(Auth::login($user));
                session()->flush();
                session()->put('user', $user['id']);
                session()->put('pfp', $user['profilbild']);
                session()->put('pfname', $user['benutzername']);

                return redirect()->intended();
            }
        }

        /*
        Auth::login(User::where('email', $data['email'])->first());
        //dd('Rair');
        dd(Auth::attempt([
            'email' => $data['email'],
            'passwort' => $data['passwort']
        ], true));
        Auth::logout();
        
        if (Auth::attempt($data)) {
            // Authentication passed...
            //Auth::guard('admin')->login($data);
            dd(Auth::attempt($data));
            
            Auth::user();
            return redirect()->intended('dashboard');
            
        }
        */
    }

    public function flushSession(){
        Auth::logout();
        session()->flush();
        return redirect('/');
    }

    public function ShowAccountPage()
    {

        return view('viewacc', [
            'user' => User::where('id', session()->get('user'))->first(),
            'stunden' => Stunde::where('userId', session()->get('user'))->get(),
            'gebucht' => Gebucht::where('userId', session()->get('user'))->get()
        ]);
    }

    public function ShowUpdatePage()
    {
        return view('updateacc');
    }
}
