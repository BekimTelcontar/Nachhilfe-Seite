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

            $user = User::create([
                'benutzername' => e($data['benutzername']),
                'password' => Hash::make(e($data['password'])),
                'email' => e($data['email']),
                'profilbild' => base64_encode($contents)
            ]);
            Auth::login($user);

            session()->flush();
            session()->put('user', Auth::user()['id']);

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
            'password' => 'required|min:8', 'string',
        ]);

        if (Auth::attempt(['email' => e($data['email']), 'password' => e($data['password'])], true)) {
            if (Hash::needsRehash(Auth::user()['password'])) {
                User::where('id', Auth::user()['id'])->update(['password' => Hash::make(e($data['password']))]);
            }
            session()->flush();
            session()->put('user', Auth::user()['id']);
            return redirect()->intended();
        } else {
            return redirect('login');
        }
    }

    public function flushSession()
    {
        Auth::logout();
        session()->flush();
        return redirect('/');
    }

    public function ShowAccountPage()
    {
        return view('viewacc', [
            'user' => User::where('id', Auth::user()['id'])->first(),
            'stunden' => Stunde::where('userId', Auth::user()['id'])->get(),
            'gebucht' => Gebucht::where('userId', Auth::user()['id'])->get()
        ]);
    }

    public function ShowUpdatePage()
    {
        return view('updateacc');
    }
}
