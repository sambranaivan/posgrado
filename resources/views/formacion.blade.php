@extends('layouts.app')

@section('content')

<div class="container">
<h1 class="text-center text-white" style="background-image:url({{asset('img/carreras/fondo.png')}});background-size:cover; ">Formación Continua</h1>
    <div class="row">

        <div class="col-md-6 carrera-image text-center img-center">
            <a href="carreras/diplomatura">

                 <img class="img-responsive img-center" src="{{asset('img/carreras/diplomatura.png')}}">
                </a>
                         <a href="carreras/diplomatura">
                             <h3 class="text-center">Diplomatura Superior</h3>
                         </a>
        </div>
        <div class="col-md-6 carrera-imagen text-center img-center text-muted">

                    <a href="carreras/cursos">
<img class="img-responsive img-center" src="{{asset('img/carreras/cursos.png')}}">

                    <h3 class="text-center">Cursos de Posgrado</h3>
                    </a>



        </div>


    </div>
</div>
{{--  end container --}}
@endsection


 {{-- <a href="carreras/doctorado" class="list-group-item list-group-item-action text-center">Doctorados</a>
                            <a href="carreras/maestria" class="list-group-item list-group-item-action text-center">Maestrías</a>
                            <a href="carreras/especializacion" class="list-group-item list-group-item-action text-center">Especializaciónes</a> --}}
