@extends('layouts.app')

@section('content')
<script>
$(document).ready(function(){
  var carreras = {!! json_encode($carreras->toArray()) !!};
  console.log(carreras)
})
</script>
<div class="container">


            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <h2 class="text-center">Ofertas de {{$titulo}}</h2>
                        </div>
                        <div class="col-md-3 text-right">
                            <a class="btn btn-primary" href="#">
                                Agregar nueva Carrera
                                <i class="fas fa-edit    "></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-5">

                            <div class="list-group">
                                <div class="list-group">
                                    @foreach ($carreras as $item)
                                    <a href="/carreras/{{strtolower($ref)}}/{{$item->id}}" class="list-group-item list-group-item-action btn-sm carrera">{{$item->nombre}}</a>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 bg-light">
@if ($selected)
                            @auth
                                <a class="btn btn-sm btn-primary" href="/edit/{{$selected->id}}">
                                        Editar carrera <i class="fas fa-edit"></i>
                                </a>
                            @endauth
                            {{-- {{print_r($selected)}} --}}
                            <h3>{{$selected->nombre}}</h3>
                              <span> &nbsp</span>
                            <p><strong>Título que otorga:</strong>{{$selected->titulo}} </p>
                            <p><strong>Resolución de Creación de Carrera: </strong>{{$selected->resolucion->codigo}}</p>
                            <p><strong>Acreditación: </strong>{{$selected->coneau->codigo}} - {{$selected->ministerio->codigo}}</p>

                            <span> &nbsp</span>
                            <p><strong><u>Autoridades</u></strong></p>

                            @foreach ($selected->designaciones as $designacion)
                                    <p><strong>{{$designacion->cargo}}: </strong>{{$designacion->autoridad->nombre}}</p>
                            @endforeach
                            {{-- <p><strong>Acreditación: </strong>{{$selected->ministerio->codigo}}</p> --}}
                             <span> &nbsp</span>
                            <p><strong><u>Informes</u><strong></p>
@else

@endif
                        </div>
                    </div>
                </div>
                </div>
        </div>{{-- end card --}}


{{-- end container --}}
@endsection
