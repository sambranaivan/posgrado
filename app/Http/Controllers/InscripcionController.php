<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\inscripcion;
use App\nodocente;
class InscripcionController extends Controller
{
    //

    public function recieve(request $request){



        $i = new inscripcion();

            $i->nombre = $request->nombre;
            $i->apellido = $request->apellido;
            $i->cuil = $request->cuil;
            $i->nacimiento = $request->nacimiento;
            $i->email = $request->email;
            $i->telefono = $request->telefono;
            $i->domicilio = $request->domicilio;
            $i->ciudad = $request->ciudad;
            $i->facultad = $request->facultad;
            $i->cargo = $request->cargo;
            $i->resolucion = $request->resolucion;
            $i->fecha_cargo = $request->fecha_cargo;
            $i->intitucion = $request->intitucion;
            $i->carrera = $request->carrera;
            $i->duracion = $request->duracion;
            $i->titulo = $request->titulo;
            $i->carrera_inicio = $request->carrera_inicio;
            $i->carrera_costo = $request->carrera_costo;
            $i->aranceles_1 = $request->aranceles_1;
            $i->aranceles_2 = $request->aranceles_2;
            $i->aranceles_3 = $request->aranceles_3;
            $i->aranceles_4 = $request->aranceles_4;


            // archivos
            $i->file_cuil = $request->file_cuil;
            $i->file_resolucion = $request->file_resolucion;
            $i->file_aranceles = $request->file_aranceles;
            $i->file_posgrado = $request->file_posgrado;
            $i->file_cuenta = $request->file_cuenta;
            $i->file_cv = $request->file_cv;


            if($request->hasFile('file_cuil'))
            {
                $file = $request->file('file_cuil');
                $name = $i->apellido."-".$i->nombre."-cuil.pdf";
                $file->move(public_path().'/pdf/resoluciones/2020/',$name);
                $i->file_cuil = $name;
            }
            if($request->hasFile('file_resolucion'))
            {
                $file = $request->file('file_resolucion');
                $name = $i->apellido."-".$i->nombre."-resolucion.pdf";
                $file->move(public_path().'/pdf/resoluciones/2020/',$name);
                $i->file_resolucion = $name;
            }
             if($request->hasFile('file_aranceles'))
            {
                $file = $request->file('file_aranceles');
                $name = $i->apellido."-".$i->nombre."-aranceles.pdf";
                $file->move(public_path().'/pdf/resoluciones/2020/',$name);
                $i->file_aranceles = $name;
            }
              if($request->hasFile('file_posgrado'))
            {
                $file = $request->file('file_posgrado');
                $name = $i->apellido."-".$i->nombre."-posgrado.pdf";
                $file->move(public_path().'/pdf/resoluciones/2020/',$name);
                $i->file_posgrado = $name;
            }
              if($request->hasFile('file_cuenta'))
            {
                $file = $request->file('file_cuenta');
                $name = $i->apellido."-".$i->nombre."-cuenta.pdf";
                $file->move(public_path().'/pdf/resoluciones/2020/',$name);
                $i->file_cuenta = $name;
            }
              if($request->hasFile('file_cv'))
            {
                $file = $request->file('file_cv');
                $name = $i->apellido."-".$i->nombre."-cv.pdf";
                $file->move(public_path().'/pdf/resoluciones/2020/',$name);
                $i->file_cv = $name;
            }



        $i->save();
        return redirect('/inscripcion/completa');

    }

    public function recieveNoDocente(request $request)
    {



        $i = new nodocente();

            $i->nombre = $request->nombre;
            $i->apellido = $request->apellido;
            $i->cuil = $request->cuil;
            $i->nacimiento = $request->nacimiento;
            $i->email = $request->email;
            $i->telefono = $request->telefono;
            $i->domicilio = $request->domicilio;
            $i->ciudad = $request->ciudad;
            $i->unidad = $request->unidad;
            $i->cargo = $request->cargo;
            $i->resolucion = $request->resolucion;
            $i->fecha_cargo = $request->fecha_cargo;
            $i->intitucion = $request->intitucion;
            $i->carrera = $request->carrera;
            $i->duracion = $request->duracion;
            $i->titulo = $request->titulo;
            $i->actividad = $request->actividad;
            $i->carrera_inicio = $request->carrera_inicio;
            $i->carrera_costo = $request->carrera_costo;
            $i->aranceles_1 = $request->aranceles_1;
            // $i->aranceles_2 = $request->aranceles_2;
            // $i->aranceles_3 = $request->aranceles_3;
            // $i->aranceles_4 = $request->aranceles_4;


            // archivos
            $i->file_cuil = $request->file_cuil;
            $i->file_resolucion = $request->file_resolucion;
            // $i->file_aranceles = $request->file_aranceles;
            // $i->file_posgrado = $request->file_posgrado;
            // $i->file_cuenta = $request->file_cuenta;
            $i->file_cv = $request->file_cv;


            if($request->hasFile('file_cuil'))
            {
                $file = $request->file('file_cuil');
                $name = "ND-".$i->apellido."-".$i->nombre."-cuil.pdf";
                $file->move(public_path().'/pdf/resoluciones/2020/ND/',$name);
                $i->file_cuil = $name;
            }
            if($request->hasFile('file_resolucion'))
            {
                $file = $request->file('file_resolucion');
                $name = "ND-".$i->apellido."-".$i->nombre."-resolucion.pdf";
                $file->move(public_path().'/pdf/resoluciones/2020/ND/',$name);
                $i->file_resolucion = $name;
            }
             if($request->hasFile('file_aranceles'))
            {
                $file = $request->file('file_aranceles');
                $name = "ND-".$i->apellido."-".$i->nombre."-aranceles.pdf";
                $file->move(public_path().'/pdf/resoluciones/2020/ND/',$name);
                $i->file_aranceles = $name;
            }
              if($request->hasFile('file_posgrado'))
            {
                $file = $request->file('file_posgrado');
                $name = "ND-".$i->apellido."-".$i->nombre."-posgrado.pdf";
                $file->move(public_path().'/pdf/resoluciones/2020/ND/',$name);
                $i->file_posgrado = $name;
            }
              if($request->hasFile('file_cuenta'))
            {
                $file = $request->file('file_cuenta');
                $name = "ND-".$i->apellido."-".$i->nombre."-cuenta.pdf";
                $file->move(public_path().'/pdf/resoluciones/2020/ND/',$name);
                $i->file_cuenta = $name;
            }
              if($request->hasFile('file_cv'))
            {
                $file = $request->file('file_cv');
                $name = "ND-".$i->apellido."-".$i->nombre."-cv.pdf";
                $file->move(public_path().'/pdf/resoluciones/2020/ND/',$name);
                $i->file_cv = $name;
            }



        $i->save();
        return redirect('/inscripcion/completa');

    }



    public function verInscriptos()
    {
        $inscripciones = inscripcion::where('id','>',1)->whereDate('created_at','>','2020-05-01')->get();
        return view('inscriptos',['inscriptos'=>$inscripciones]);
    }

    public function verNoDocentes()
    {
        $inscripciones = nodocente::where('id', '>', 1)->get();
        return view('inscriptosnd', ['inscriptos' => $inscripciones]);
    }
}
