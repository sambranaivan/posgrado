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

    public function addResolucion($codigo,$tipo)
    {
        $res = new Resolucion();
        $res->codigo = $codigo;
        $res->tipo = $tipo;
        $res->save();
        switch($tipo){
            case 1:
            $this->consejo_id = $res->id;
            break;
            case 2:
            $this->coneau_id = $res->id;
            break;
            case 3:
            $this->ministerio_id = $res->id;
            break;
        }
        return $this;
    }

    public function addAutoridad($nombre)
    {
        $a = new Autoridad();
        $a->nombre = $nombre;

        $a->save();
        $d = new Designacion();
        $d->cargo = ("Director");
        $d->carrera_id = $this->id;
        $d->autoridad_id = $a->id;
        $d->save();
        return $this;

    }

    public function constructor($nombre,$res,$cn,$me)
    {
        $this->nombre = $nombre;
$this->addResolucion($res,1);
$this->addResolucion($cn,2);
$this->addResolucion($me,3);


    }
}
