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
        $this->unidad_id = $u->id;
        return $this;
    }

    public function addResolucion($codigo,$tipo)
    {
        $res = new Resolucion();
        $res->codigo = $codigo;
        $res->tipo = $tipo;
        $res->save();
        $this->consejo_id = $res->id;
        return $this;
    }
}
