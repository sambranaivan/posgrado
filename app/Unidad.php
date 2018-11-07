<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\user;
class Unidad extends Model
{
    //

    public function generateUser(){
        $u = new User();
        $u->name = $this->alias;
        $u->email = $this->alias;
        $u->password = bcrypt($this->alias.$this->alias);
        $u->save();

    }
}
