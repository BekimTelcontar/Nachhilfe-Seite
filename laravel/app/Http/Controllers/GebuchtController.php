<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GebuchtController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function BookLesson($id){

    }
}
