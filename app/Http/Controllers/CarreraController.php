<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarreraController extends Controller
{
    //

    public function index(){
        return view('carreras');
    }

    public function nuevaCarrera()
    {
        return view('nueva_carrera');
    }
}
