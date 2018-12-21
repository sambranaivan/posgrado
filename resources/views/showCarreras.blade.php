@extends('layouts.app')

@section('content')
<style>
    #info-carrera{
        background-color:red;
    }
</style>
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

$('#select_area').change(function(){
var value = $(this).val();
$(".carrera").hide()
	$.each($(".carrera"),function(){
        if($(this).data('area') == value | value == 'all' )
            $(this).show();
    });

});

$('#filter_nombre').keyup(function(){
var value = $(this).val();
$(".carrera").hide()
	$.each($(".carrera"),function(){
        var data = $(this).data('nombre').toLowerCase().normalize('NFD').replace(/[\u0300-\u036f]/g, "")

        if(data.includes(value) | value == '' )
            $(this).show();
    });

});


$('#select_modalidad').change(function(){
var value = $(this).val();
$(".carrera").hide()
	$.each($(".carrera"),function(){
        if($(this).data('modalidad') == value | value == 'all' )
            $(this).show();
    });

});




})
</script>
<div class="container-fluid">
   <h1 class="text-center text-white" style="background-image:url({{asset('img/carreras/fondo.png')}});background-size:cover; ">Ofertas de {{$titulo}}</h1>

            <div class="card">
                <div class="card-header">
                    <div class="row">

                        <div class="col-md-12">

                        </div>
                        <div class="col-md-12">

                            <form class="form">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                        <label for="filter_unidad_academica">Buscar por Unidad Académica</label>
                                        <select name="filter_unidad_academica" id="select_facultad" class="form-control">
                                            <option value="all">Ver Todo</option>
                                            @foreach ($unidades as $unidadAcademica)
                                                <option value="{{$unidadAcademica->alias}}">{{$unidadAcademica->nombre}}</option>
                                            @endforeach
                                        </select>
                                        </div>
                                    </div>
                                    {{--    --}}
                                    @if($titulo != 'Diplomatura Superior')
                                        <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="filter_area">Área Disciplinaria</label>
                                            <select name="filter_area" id="select_area" class="form-control">
                                                <option value="all">Ver Todo</option>
                                                @foreach ($areas as $a)
                                                    <option value="{{$a->area}}">{{$a->area}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    @endif

                                    {{--    --}}
                                    <div class="col-md-3">
                                        <div class="form-group">
                                             <label for="filter_nombre">Nombre de Carrera</label>
                                                  <input type="text" name="filter_nombre" id="filter_nombre" class="form-control" placeholder="Buscar por nombre de Carrera" aria-describedby="helpId">

                                                </div>
                                        </div>
                                      <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="filter_modalidad">Modalidad</label>
                                            <select name="filter_modalidad" id="select_modalidad" class="form-control">
                                                <option value="all">Ver Todo</option>
                                                <option value="Presencial">Presencial</option>
                                                <option value="Virtual">Virtual</option>

                                            </select>
                                        </div>
                                    </div>
                                    </div>
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
                                    <a href="/carreras/{{strtolower($ref)}}/{{$item->id}}" data-unidad-academica="{{$item->unidadAcademica->alias}}" data-area="{{$item->area}}" data-nombre="{{$item->nombre}}" data-modalidad="{{$item->modalidad}}" class="list-group-item list-group-item-action btn-sm carrera">{{$item->nombre}}</a>
                                    @endforeach

                                </div>

                        </div>
                        <div class="col-md-7" style="background-image: url('{{asset('img/carreras/bg_'.$ref.'.png')}}') ;background-size:cover;background-repeat: no-repeat;background-size: 100%; background-position: bottom; ">

@if ($selected)
                            @auth
                                @if(Auth::user()->id == 1)

                                            <a class="btn btn-sm btn-primary" href="/edit/{{$selected->id}}">
                                                Editar carrera <i class="fas fa-edit"></i>
                                            </a>
                                @elseif(Auth::user()->unidad->id == $selected->unidad->id)


                                        <a class="btn btn-sm btn-primary" href="/edit/{{$selected->id}}">
                                        Editar carrera <i class="fas fa-edit"></i>
                                        </a>
                                @endif
                            @endauth
                            {{-- {{print_r($selected)}} --}}
                            <h3>{{$selected->nombre}}</h3>
                              <span> &nbsp</span>
                            <p><strong>Título que otorga: </strong>{{$selected->titulo}} </p>
                            <span> &nbsp</span>
                             @if($titulo != 'Diplomatura Superior')
                            <p><strong>Área disciplinaria: </strong>{{$selected->area}} </p>

                             @endif
                            <p><strong>Modalidad: </strong>{{$selected->modalidad}} </p>

                                @foreach ($selected->resoluciones as $item)
                                        <p>
                                            <strong>
                                                Resolución {{$item->descripcion}}:
                                            </strong>
                                                {{$item->codigo}}

                                        @if($item->file)
                                                <a href="{{asset('/pdf/resoluciones/'.$item->file)}}" class="btn btn-sm btn-danger">
                                                <i class="fas fa-file-pdf"></i>
                                                </a>
                                        @else

                                                <i class="fas fa-file-pdf"></i>

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
                               <span class="text-muted">Sin informar</span>
                            @endif
                          </p>

                            <p><strong><u><a href="{{$selected->unidad->link}}">Más información</a></u></strong></p>
@else

@endif
                        </div>
                    </div>
                </div>
                </div>
        </div>{{-- end card --}}


{{-- end container --}}
@endsection
