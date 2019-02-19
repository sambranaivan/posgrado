<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
    //register
    public function setUnidadAcademica($unidad)
    {
        $u = Unidad::where('alias',$unidad)->first();
        $this->unidad_id = $u->id;
        return $this;
    }

    public function setDenominacion($denominacion)
    {
        $u = Denominacion::where('descripcion',$denominacion)->first();
        $this->denominacion_id = $u->id;
        return $this;
    }

    public function addResolucion($codigo,$descripcion)
    {
        $res = new Resolucion();
        $res->codigo = $codigo;
        $res->descripcion = $descripcion;
        $res->carrera_id = $this->id;
        $res->save();

        return $this;
    }

    public function addAutoridad($nombre,$cargo = "Director")
    {

        $a = new Autoridad();
        $a->nombre = $nombre;
        $a->cargo = $cargo;
        $a->carrera_id = $this->id;
        $a->save();
        return $this;

    }

    public function constructor($nombre,$res,$cn,$me)
    {
        $this->nombre = $nombre;
        $this->save();
$this->addResolucion($res,'Consejo Superior');
$this->addResolucion($cn,'Coneau');
$this->addResolucion($me,'Ministerial');


    }

    ////relaciones
    public function resoluciones()
    {
    return $this->hasMany('App\Resolucion','carrera_id');
    }




    public function unidadAcademica(){
        return $this->belongsTo('App\Unidad','unidad_id');
    }

     public function unidad(){
        return $this->belongsTo('App\Unidad','unidad_id');
    }

    public function autoridades(){
        return $this->hasMany('App\Autoridad','carrera_id');
    }

    public function denominacion(){
        return $this->belongsTo('App\Denominacion');
    }



}
