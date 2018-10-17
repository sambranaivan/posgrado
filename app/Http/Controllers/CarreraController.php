<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carrera;
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


}
