<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Unidad extends Model
{
    //

    public function generateUser(){
        $u = new User();
        $u->name = $this->alias;
        $u->email = $this->alias;
        $u->password = bcrypt($this->alias);
        $u->save();
        $this->user_id = $u->id;
        $this->save();

    }

    public function carreras(){
        return $this->hasMany('App\Carrera');
    }
}
