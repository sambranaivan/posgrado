<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tramite;
class TramiteController extends Controller
{
    //

    public function listado(){
        $t = Tramite::all();

        return view('tramites')->with('tramites',$t);
    }



      public function subir(request $request)
    {


            if($request->hasFile('archivo'))
            {
                $file = $request->file('archivo');
                $name = $file->getClientOriginalName();
                $file->move(public_path().'/pdf/tramites/',$name);


                $t = new Tramite();
                $t->titulo = $request->titulo;
                $t->file = $name;
                $t->save();
                return redirect('tramites');

            }

    }
}
