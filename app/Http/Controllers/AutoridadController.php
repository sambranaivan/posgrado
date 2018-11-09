<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Autoridad;
class AutoridadController extends Controller
{
    //

    public function nuevo(request $request){
        $a = new Autoridad();
        $a->carrera_id = $request->id;
        $a->nombre = $request->nombre;
        $a->cargo = $request->cargo;
        $a->email = $request->email;
        $a->contacto = $request->contacto;
        $a->save();
        return redirect('/edit/'.$a->carrera_id)->with("autoridad",$a);;
    }

    public function edit($id){
        $a = Autoridad::find($id);

        return view('editarAutoridad')->with('autoridad',$a);
    }

    public function update(request $request){
        $a = Autoridad::find($request->id);
        // $a->carrera_id = $request->id;
        $a->nombre = $request->nombre;
        $a->cargo = $request->cargo;
        $a->email = $request->email;
        $a->contacto = $request->contacto;
        $a->save();
        return redirect('/edit/'.$a->carrera_id)->with("autoridad",$a);;
    }



}
