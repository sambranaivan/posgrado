@extends('layouts.app')

@section('content')
<script>
$(document).ready(function(){
  var carreras = {!! json_encode($carreras->toArray()) !!};
  console.log(carreras)


$('#select_facultad').change(function(){
var value = $(this).val();
$(".carrera").hide()
	$.each($(".carrera"),function(){
        if($(this).data('unidad-academica') == value | value == 'all' )
            $(this).show();
    });

});






})
</script>
<div class="container">


            <div class="card">
                <div class="card-header">
                    <div class="row">

                        <div class="col-md-12">
                            <h2 class="text-center">Ofertas de {{$titulo}}</h2>
                        </div>
                        <div class="col-md-12">
                            <form class="form-inline">
                                {{-- <div class="form-group">
                                    <label for="filter_denominacion">Denominacion</label>
                                    <select name="filter_denominacion" id="" class="form-control">
                                        <option value="">Doctorado</option>
                                        <option value="">Maestria</option>
                                        <option value="">Especialización</option>
                                    </select>
                                </div> --}}
                                <div class="form-group">
                                    <label for="filter_unidad_academica">Buscar por Unidad Académica</label>
                                    <select name="filter_unidad_academica" id="select_facultad" class="form-control">
                                        <option value="all">Ver Todo</option>
                                        @foreach ($unidades as $unidadAcademica)
                                            <option value="{{$unidadAcademica->alias}}">{{$unidadAcademica->nombre}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-5">


                                <div class="list-group" id="listado_carreras">
                                    @foreach ($carreras as $item)
                                    <a href="/carreras/{{strtolower($ref)}}/{{$item->id}}" data-unidad-academica={{$item->unidadAcademica->alias}} class="list-group-item list-group-item-action btn-sm carrera">{{$item->nombre}}</a>
                                    @endforeach

                                </div>

                        </div>
                        <div class="col-md-7 bg-light">
@if ($selected)
                            @auth
                                @if(Auth::user()->id == 1)

                                            <a class="btn btn-sm btn-primary" href="/edit/{{$selected->id}}">
                                                Editar carrera <i class="fas fa-edit"></i>
                                            </a>
                                @else(Auth::user()->unidad->id == $selected->unidad->id)
                                        <a class="btn btn-sm btn-primary" href="/edit/{{$selected->id}}">
                                        Editar carrera <i class="fas fa-edit"></i>
                                        </a>
                                @endif
                            @endauth
                            {{-- {{print_r($selected)}} --}}
                            <h3>{{$selected->nombre}}</h3>
                              <span> &nbsp</span>
                            <p><strong>Título que otorga: </strong>{{$selected->titulo}} </p>

                                @foreach ($selected->resoluciones as $item)
                                        <p>
                                            <strong>
                                                Resolución {{$item->descripcion}}:
                                            </strong>
                                                {{$item->codigo}}

                                        @if($item->file)
                                                <a href="{{asset('/pdf/resoluciones/'.$item->file)}}" class="btn btn-sm btn-danger">
                                                <i class="fas fa-file-pdf    "></i>
                                                </a>
                                        @else

                                                <i class="fas fa-file-pdf    "></i>

                                        @endif
                            </p>



                                @endforeach

                            <span> &nbsp</span>
                            <p><strong><u>Responsables</u></strong></p>

                            @foreach ($selected->autoridades as $autoridades)
                                    <p><strong>{{$autoridades->cargo}}:</br> </strong>{{$autoridades->nombre}}</p>
                                    <p><strong>Tel: </strong>{{$autoridades->contacto}}</p>
                                    <p><strong>Direccion de email: </strong>{{$autoridades->email}}</p>
                            @endforeach
                            {{-- <p><strong>Acreditación: </strong>{{$selected->ministerio->codigo}}</p> --}}

                            <p><strong><u>Fechas de Inscripción:</u> </strong>

                            @if ($selected->descripcion)
                               <b>{{$selected->descripcion}}</b>
                            @else
                               <span class="text-muted">a termino</span>
                            @endif
                          </p>

                            <p><strong><u><a href="#">Más información</a></u></strong></p>
@else

@endif
                        </div>
                    </div>
                </div>
                </div>
        </div>{{-- end card --}}


{{-- end container --}}
@endsection
