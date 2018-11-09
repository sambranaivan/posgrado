<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Unidad;
class Resolucion extends Model
{
 public function carrera(){
     return $this->belongsTo('App\Carrera');
 }
}
