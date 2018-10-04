<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OfertaController extends Controller
{
    //Home ofertas vista administracion
    public function index()
    {
        return view('oferta');
    }

    // Formulario para la carga de nueva oferta de posgrado
     public function nuevaOferta()
    {
        return view('nueva_oferta');
    }
}
