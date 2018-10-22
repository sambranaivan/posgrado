<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class designacion extends Model
{
    //

    public function autoridad()
    {
        return $this->belongsTo('App\autoridad');
    }
}
