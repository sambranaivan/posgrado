<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asunto extends Model
{
    //
    protected $connection = 'mysql2';
    protected $table = 'TABLAS';
    protected $primaryKey  = 'codigo';
}
