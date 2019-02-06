@extends('layouts.app')

@section('content')
<style>

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


$(".carrera_button").click(function(){

    var info = $("#info-carrera");
    @auth
        var unidad_id = {{Auth::user()->unidad->id}};
        var user_id = {{Auth::user()->id}};
    @else
        var user_id = 99;
        var unidad_id = 99;
    @endauth
    carrera = $(this).data('carrera');
    $.get('/get/carrera/'+carrera,function(data){

       data = JSON.parse(data);
        console.log(data);
       ///procedimiento de actualizacion de marco
        info.html("");
        html = "";
        if(data.unidad_academica.id == unidad_id || user_id == 1){
            html += '  <a class="btn btn-sm btn-primary" href="/edit/'+data.id+'"> Editar carrera <i class="fas fa-edit"></i></a>'
        }

        html += '<h3>'+data.nombre+'</h3> <span> &nbsp;</span>'

        html += '<p><strong>Título: </strong>'+data.titulo+'</p> <span> &nbsp;</span> '




        if(data.area != "")
        {
            html += '<p id="area"><strong>Área disciplinar: </strong>Ciencias Sociales </p>'
        }

        html += ' <p><strong>Modalidad: </strong>'+data.modalidad+' </p> '


        html += '<div id="resoluciones"><p><strong><u>Resoluciones</u></strong></p> <ul>'
            data.resoluciones.forEach(function(v,i,a){
                 if(v.file == null)
                 {
                    html += '<p><strong>'+v.descripcion+': </strong>'+v.codigo+'</p>'
                 }
                 else
                 {
                     html += '<p><strong>'+v.descripcion+': </strong> '+v.codigo+'<a href="/pdf/resoluciones/'+v.file+'" class="btn btn-sm btn-danger"><i class="fas fa-file-pdf"></i></a></p>'
                 }
            })
        html += '</ul></div>'
        html += ''
        html += '<div id="responsables">'
        html += '<p><strong><u>Responsables</u></strong></p><ul> '
            data.autoridades.forEach(function(v,i,a){

                if(v.contacto == null){contacto = ""}else{contacto = v.contacto}
                if(v.email == null){email = ""}else{email = v.email}

                    html += '<p><strong>'+v.cargo+':</br> </strong>'+v.nombre+'</p>'
                    html += '<p><strong>Tel: </strong>'+contacto+'</p>'
                    html += '<p><strong>Direccion de email: </strong>'+email+'</p>'

            })

        html += '</ul></div>'

        html += '<p><strong><u>Fechas de Inscripción:</u></strong> '
            if(data.descripcion != null)
            {
                html += data.descripcion
            }
            else
            {
                html += '<span class="text-muted">sin informar</span>'
            }
        html +='</p>'

        html += '<p id="pagina"><strong><u>Secretaría de Posgrado de la Facultad</u>: <a href="'+data.unidad_academica.link+'">Click Aquí</a></strong></p>'

            info.html(html);
    })

})


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
                                    {{--  si no es diplomatura superior muestro los demas campos de busqueda  --}}
                                    {{-- Diplomatura superuor no tiene area diciplinar  --}}
                                    @if($titulo != 'Diplomatura Superior')
                                        <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="filter_area">Área Disciplinar</label>
                                            <select name="filter_area" id="select_area" class="form-control">
                                                <option value="all">Ver Todo</option>
                                                @foreach ($areas as $a)
                                                    <option value="{{$a->area}}">{{$a->area}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    @endif

                                    {{--  filtros de busqueda comunes para todos  --}}
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
                                    {{-- listado de carreras --}}
                                    {{-- este vinculo envia a la nueva carrera --}}
                                    <a href="#" data-ref={{strtolower($ref)}} data-carrera="{{$item->id}}" data-unidad-academica="{{$item->unidadAcademica->alias}}" data-area="{{$item->area}}" data-nombre="{{$item->nombre}}" data-modalidad="{{$item->modalidad}}" class="list-group-item list-group-item-action btn-sm carrera carrera_button">{{$item->nombre}}</a>
                                    @endforeach

                                </div>

                        </div>
                        <div class="col-md-7" id="info-carrera" style="background-image: url('{{asset('img/carreras/bg_'.$ref.'.png')}}') ;background-size:cover;background-repeat: no-repeat;background-size: 100%; background-position: bottom; ">


                        </div>
                        {{-- end info-carrea --}}
                    </div>
                    {{-- end row --}}
                </div>
                {{-- end body --}}
                </div>
        </div>{{-- end card --}}


{{-- end container --}}
@endsection
