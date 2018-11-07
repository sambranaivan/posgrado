<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResolucionController extends Controller
{
    //

    public function subir(Request $request)
    {
            if($request->hasfile('pdf'))
            {
                $file = $request->file('pdf');
                $name = 'prueb';
                $file->move(public_path().'/pdf/',$name);
                return $name;

            }
    }
}
