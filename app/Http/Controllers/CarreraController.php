<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Carrera;
use App\Unidad;
use App\Resolucion;
use App\Denominacion;
use App\Autoridad;
use Barryvdh\DomPDF\Facade as PDF;
use DB;
class CarreraController extends Controller
{
    //

    public function index(){
        return view('carreras');
    }

    public function nuevaCarrera()
    {
            $u = Unidad::all();
            $d = Denominacion::all();
        return view('nueva_carrera')->with('unidades',$u)->with('denominaciones',$d);
    }

    public function addCarrera(Request $request)
    {
        $c = new Carrera();
        $c->nombre = $request->nombre;
        $c->denominacion_id = $request->denominacion;
        $c->unidad_id = $request->unidad;
        $c->modalidad = $request->Modalidad;
        $c->descripcion = $request->inscripcion;
        $c->save();

        if($request->responsable)
        {
            $r = new Autoridad();
            $r->carrera_id = $c->id;
            $r->cargo = "Responsable";
            $r->nombre = $request->responsable;
            $r->save();
        }
        

        if($request->contacto)
        {
            $contacto = new Autoridad();
            $contacto->nombre = $request->contacto;
            $contacto->telefono = $request->telefono;
            $contacto->email = $request->email;
            $contacto->carrera_id = $c->id;
            $contacto->cargo = "Contacto";
            $contacto->save();
        }

        if($request->resolucion)
        {
            $res = new Resolucion();
            $res->codigo = $request->resolucion;
            $res->carrera_id = $c->id;
            $res->save();

        }

        return redirect('admin/carreras/add')->with('carrera',$c->id);



    }


    public function doctorados(){
        $c = Carrera::where('denominacion_id',3)->get();
        $u = Unidad::all();
        $areas = DB::table('carreras')->select('area')->distinct()->get();
        return view('showCarreras')->with('carreras',$c)->with('titulo','Doctorado')->with('selected',false)->with('ref','Doctorado')->with('unidades',$u)->with('areas',$areas);
    }
     public function cursos(){
        $c = Carrera::where('denominacion_id',5)->get();
        $u = Unidad::all();
        $areas = DB::table('carreras')->select('area')->distinct()->get();
        return view('showCarreras')->with('carreras',$c)->with('titulo','Cursos de Posgrado')->with('selected',false)->with('ref','Cursos de posgrado')->with('unidades',$u)->with('areas',$areas);
    }
    public function maestrias(){
        $c = Carrera::where('denominacion_id',2)->get();
        $areas = DB::table('carreras')->select('area')->distinct()->get();
        $u = Unidad::all();
        return view('showCarreras')->with('carreras',$c)->with('titulo','Maestría')->with('selected',false)->with('ref','Maestria')->with('unidades',$u)->with('areas',$areas);;

    }
    public function especializaciones(){
        $c = Carrera::where('denominacion_id',1)->get();
        $areas = DB::table('carreras')->select('area')->distinct()->get();
        $u = Unidad::all();
        return view('showCarreras')->with('carreras',$c)->with('titulo','Especialización')->with('selected',false)->with('ref','Especializacion')->with('unidades',$u)->with('areas',$areas);;

}
    public function showdoctorados($id){
        $c = Carrera::where('denominacion_id',3)->get();
        $areas = DB::table('carreras')->select('area')->distinct()->get();
        $u = Unidad::all();
        $s = Carrera::find($id);
        return view('showCarreras')->with('carreras',$c)->with('titulo','Doctorado')->with('selected',$s)->with('ref','Doctorado')->with('unidades',$u)->with('areas',$areas);;
    }
    public function showmaestrias($id){
    $c = Carrera::where('denominacion_id',2)->get();
    $areas = DB::table('carreras')->select('area')->distinct()->get();
    $u = Unidad::all();
    $s = Carrera::find($id);
        return view('showCarreras')->with('carreras',$c)->with('titulo','Maestría')->with('selected',$s)->with('ref','Maestria')->with('unidades',$u)->with('areas',$areas);;
}
    public function showespecializaciones($id){
    $c = Carrera::where('denominacion_id',1)->get();
    $areas = DB::table('carreras')->select('area')->distinct()->get();
    $u = Unidad::all();
    $s = Carrera::find($id);
        return view('showCarreras')->with('carreras',$c)->with('titulo','Especialización')->with('selected',$s)->with('ref','Especializacion')->with('unidades',$u)->with('areas',$areas);;
}
public function showcursos($id){
    $c = Carrera::where('denominacion_id',5)->get();
    $areas = DB::table('carreras')->select('area')->distinct()->get();
    $u = Unidad::all();
    $s = Carrera::find($id);
        return view('showCarreras')->with('carreras',$c)->with('titulo','Cursos de Posgrado')->with('selected',$s)->with('ref','Curso de Posgrado')->with('unidades',$u)->with('areas',$areas);

}



// Diplomaturas

    public function diplomaturas(){
        $c = Carrera::where('denominacion_id',4)->get();
        $u = Unidad::all();
        $areas = DB::table('carreras')->select('area')->distinct()->get();
        return view('showCarreras')->with('carreras',$c)->with('titulo','Diplomatura Superior')->with('selected',false)->with('ref','diplomatura')->with('unidades',$u)->with('areas',$areas);
    }

       public function showdiplomaturas($id){
    $c = Carrera::where('denominacion_id',4)->get();
    $areas = DB::table('carreras')->select('area')->distinct()->get();
    $u = Unidad::all();
    $s = Carrera::find($id);
        return view('showCarreras')->with('carreras',$c)->with('titulo','Diplomatura Superior')->with('selected',$s)->with('ref','diplomatura')->with('unidades',$u)->with('areas',$areas);;




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
        // $c->unidad_id = $request->unidad;
        $c->nombre = $request->nombre;
        $c->titulo = $request->titulo;
        $c->denominacion_id = $request->denominacion;
        $c->area = $request->area;

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
            $c = Auth::user()->unidad->carreras;




        }

        return view('gestioncarrera')->with('carreras',$c);
    }


    public function updateFecha(request $request){
        $c = Carrera::find($request->id);
        $c->descripcion = $request->inscripcion;
        $c->save();
        return redirect('edit/'.$c->id)->with('info','Carrera Actualizada');

    }


    public function addResolucion($carrera_id){

        $r = new Resolucion();
        $r->carrera_id = $carrera_id;
        $r->save();
    }

    public function getCarrera($id)
    {
        $c = Carrera::with('resoluciones')->with('unidadAcademica')->with('autoridades')->find($id);
        return $c->toJson();
    }

}
