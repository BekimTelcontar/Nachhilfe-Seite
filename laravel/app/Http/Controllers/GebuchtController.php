<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fach;
use App\Models\Gebucht;
use App\Models\Stunde;
use App\Models\User;

class GebuchtController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function BookLesson($id){
        $hour = Stunde::where('id', $id)->first();
        $user = User::where('id', $hour['userId'])->first();

        return view('details', [
            'user' => $user,
            'stunde' => $hour,
            'f' => Fach::where('id',$hour['fachId'])->first()
        ]);
    }
}
