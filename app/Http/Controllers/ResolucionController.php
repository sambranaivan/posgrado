<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Resolucion;

class ResolucionController extends Controller
{
    //

    public function update(request $request)
    {
        $r = Resolucion::find($request->id);

        $r->codigo = $request->codigo;
        $r->descripcion = $request->descripcion;


            if($request->hasFile('archivo'))
            {
                $file = $request->file('archivo');
                $name = "resolucion_".$r->id.".pdf";
                $file->move(public_path().'/pdf/resoluciones/',$name);
                $r->file = $name;

            }
        $r->save();
        return redirect('/edit/'.$r->carrera->id);

    }



    public function edit($id){
        $r = Resolucion::find($id);

        return view('editResolucion')->with('resolucion',$r);
    }
}
