<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResolucionController extends Controller
{
    //

    public function subir(request $request)
    {
            if($request->hasFile('archivo'))
            {
                $file = $request->file('archivo');
                $name = 'prueb.pdf';
                $file->move(public_path().'/pdf/',$name);
                return $name;

            }
           else{
               return 'no archivo';
           }
    }
}
