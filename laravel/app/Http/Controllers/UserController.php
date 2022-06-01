<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Stunde;
use App\Models\Gebucht;
use App\Models\password_resets;
use Illuminate\Auth\Events\Login;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
use Illuminate\Auth\Events\PasswordReset;

use Illuminate\Auth\Passwords;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Validation;

use function PHPUnit\Framework\isNull;

class UserController extends Controller
{
    //


    public function RegisterUser(Request $request)
    {
        $data = $request->validate([
            'profilbild' => ['image'],
            'benutzername' => ['min:3', 'string', 'filled'],
            'password' => ['min:8', 'string', 'filled'],
            'email' => ['email:rfc,dns,strict', 'filled'],
        ]);
        //Try and send email adress to confirm it is actually there

        $user1 = User::where('benutzername', e($data['benutzername']))->first();
        $user2 = User::where('email', e($data['email']))->first();

        if ($user1 === null && $user2 === null) {

            if (Auth::check()) {
                Auth::logout();
            }
            if (!isset($data['profilbild'])) {
                $contents = file_get_contents('public/Bilder/User.png'); //Storage::disk('local')->get('User.png');
            } else {
                $contents = file_get_contents($data['profilbild']);
            }

            User::create([
                'benutzername' => e($data['benutzername']),
                'password' => Hash::make(e($data['password'])),
                'email' => e($data['email']),
                'profilbild' => base64_encode($contents)
            ]);

            if (Auth::attempt(['email' => e($data['email']), 'password' => e($data['password'])], true)) {
                if (Hash::needsRehash(Auth::user()['password'])) {
                    User::where('id', Auth::user()['id'])->update(['password' => Hash::make(e($data['password']))]);
                    password_resets::create([
                        'email' => Auth::user()['email']
                    ]);
                    session()->flush();
                    session()->put('user', Auth::user()['id']);
                }
            } else {
                dd('Rair easter egg');
            }
            return redirect('/');
        }

        return view('register', [
            'msg' => 'Anmeldung ungültig'
        ]);
    }

    public function LoginUser(Request $request)
    {
        $data = $request->validate([
            'email' => ['email:rfc,dns', 'filled'],
            'password' => ['min:8', 'string', 'filled'],
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

    public function showResetPage(Request $request)
    {
        $request->validate([
            'email' => ['email']
        ]);
        $status = Password::sendResetLink(
            $request->only('email')
        );

        return $status === Password::RESET_LINK_SENT
            ? back()->with(['status' => __($status)])
            : back()->withErrors(['email' => __($status)]);
    }

    public function ResetPassword($token)
    {
        return view('newpass', ['token' => $token]);
    }
    public function ResettingPassword(Request $request)
    {
        $data = $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);
        
        $status = Password::reset(
            $request->only('email', 'password', 'token'),
            function ($user, $password) {
                $user->forceFill([
                    'password' => Hash::make($password)
                ])->setRememberToken(Str::random(60));
     
                $user->save();
                dd($user);
                event(new PasswordReset($user));
            }
        );
        
        return $status === Password::PASSWORD_RESET
                    ? redirect()->route('login')->with('status', __($status))
                    : back()->withErrors(['email' => [__($status)]]);

        //$user = User::where('email', e($data['email']))->first();
    }
}
