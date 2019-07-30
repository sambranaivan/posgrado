@extends('layouts.app')

@section('content')
@extends('layouts.app')

@section('content')
<div class="container-fluid">

    <div class="row">
        <div class="col-md-12 text-center text-info">
            <h1 class="text-center text-white" style="background-image:url({{asset('img/carreras/fondo.png')}});background-size:cover; ">Guía de Trámites</h1>
        </div>
        <div class="col-md-8 offset-md-2 text-center">
            <ul class="list-group">
            <li class="list-group-item text-left">
                <div class="row">

                    <div class="col-md-8"><h5>Solicitud de Adicional por Título de Especialista o Magister</h5></div><div class="col-md-4 text-right">
                    <a class="btn btn-danger" href="{{asset('pdf/tramites/adicional_especilista_magister.pdf')}}">Descargar Normativa&nbsp;&nbsp;<i class="fa fa-file-pdf" aria-hidden="true"></i></a></div>
                </div>
            </li>
            <li class="list-group-item text-left">
                <div class="row">

                    <div class="col-md-8"><h5>Solicitud de Adicional por Título de Doctor</h5></div><div class="col-md-4 text-right">
                    <a class="btn btn-danger" href="{{asset('pdf/tramites/adicional_doctor.pdf')}}">Descargar Normativa&nbsp;&nbsp;<i class="fa fa-file-pdf" aria-hidden="true"></i></a></div>
                </div>
            </li>
        </ul>
        </div>
    </div>
</div>

@endsection

@endsection
