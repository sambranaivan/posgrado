@extends('layouts.app')

@section('content')

<div class="container">

    <div class="row">
        <div class="col-md-4 carrera-imagen">
            <a href="carreras/doctorado">
                  <img class="img-responsive img-center" src="{{asset('img/carreras/doctorado.png')}}">
            </a>
            <a href="carreras/doctorado">
                            <h3 class="text-center">Doctorados</h3>
                        </a>
        </div>
        <div class="col-md-4 carrera-imagen">
            <a href="carreras/maestria">

                 <img class="img-responsive img-center" src="{{asset('img/carreras/maestria.png')}}">
                </a>
                         <a href="carreras/maestria">
                             <h3 class="text-center">Maestrias</h3>
                         </a>
        </div>
        <div class="col-md-4 carrera-imagen">
            <a href="carreras/especializacion">
                <img class="img-responsive img-center" src="{{asset('img/carreras/esp.png')}}">
                <a href="carreras/especializacion">
                    <h3 class="text-center">Especializaciones</h3>
                </a>
            </a>
        </div>


    </div>
</div>
{{--  end container --}}
@endsection


 {{-- <a href="carreras/doctorado" class="list-group-item list-group-item-action text-center">Doctorados</a>
                            <a href="carreras/maestria" class="list-group-item list-group-item-action text-center">Maestrías</a>
                            <a href="carreras/especializacion" class="list-group-item list-group-item-action text-center">Especializaciónes</a> --}}
