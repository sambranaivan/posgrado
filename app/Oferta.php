<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Oferta extends Model
{
    //
    function carrera(){
        return $this->hasOne('App\Carrera');
    }
}
