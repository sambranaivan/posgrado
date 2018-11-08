<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\trimite;
class TramiteController extends Controller
{
    //

    public function listado(){
        $t = Tramite::all;

        return view('tramites')->with('tramintes',$t);
    }
}
