<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Carrera;
use App\Unidad;
use Barryvdh\DomPDF\Facade as PDF;
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


    public function doctorados(){
        $c = Carrera::where('denominacion_id',3)->get();
        return view('showCarreras')->with('carreras',$c)->with('titulo','Doctorado')->with('selected',false)->with('ref','Doctorado');
    }
    public function maestrias(){
    $c = Carrera::where('denominacion_id',2)->get();
        return view('showCarreras')->with('carreras',$c)->with('titulo','Maestría')->with('selected',false)->with('ref','Maestria');
    return view('showCarreras')->with('carreras',$c);
}
    public function especializaciones(){
    $c = Carrera::where('denominacion_id',1)->get();
        return view('showCarreras')->with('carreras',$c)->with('titulo','Especialización')->with('selected',false)->with('ref','Especializacion');

}



    public function showdoctorados($id){
        $c = Carrera::where('denominacion_id',3)->get();
        $s = Carrera::find($id);
        return view('showCarreras')->with('carreras',$c)->with('titulo','Doctorado')->with('selected',$s)->with('ref','Doctorado');
    }
    public function showmaestrias($id){
    $c = Carrera::where('denominacion_id',2)->get();
    $s = Carrera::find($id);
        return view('showCarreras')->with('carreras',$c)->with('titulo','Maestría')->with('selected',$s)->with('ref','Maestria');
}
    public function showespecializaciones($id){
    $c = Carrera::where('denominacion_id',1)->get();
    $s = Carrera::find($id);
        return view('showCarreras')->with('carreras',$c)->with('titulo','Especialización')->with('selected',$s)->with('ref','Especializacion');

}

// PDF

    public function getDoctoradoPdf(){


                $carreras = Carrera::where('denominacion_id',3)->get();
        $pdf = PDF::loadView('folleto_doctorado',compact('carreras'));
        //   $pdf->set_paper("A4", "portrait");
        return $pdf->stream('pruebapdf.pdf');
            }


        public function getDoctorado(){


                $carreras = Carrera::where('denominacion_id',3)->get();
        return view('folleto_doctorado',compact('carreras'));

    }


    public function editView($id){
        $s = Carrera::find($id);
        return view('edit')->with('carrera',$s)->with('unidades',Unidad::all());
    }

    public function editSave(Request $request){


        $c = Carrera::find($request->id);
        $c->unidad_id = $request->unidad;
        $c->nombre = $request->nombre;
        $c->titulo = $request->titulo;
        $c->denominacion_id = $request->denominacion;

        $c->save();

        // print("ok");
        return redirect('edit/'.$c->id)->with('info','Carrera Actualizada');


    }

    // GESTION

    public function gestionListado(){

        if(Auth::user()->id == 1)
        {
            $c = Carrera::all();
        }
        else
        {
            $c = Auth::user()->carreras();
        }

        return view('gestioncarrera')->with('carreras',$c);
    }

}
