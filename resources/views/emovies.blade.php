@extends('layouts.app')

@section('content')
<div class="container-fluid">

    <div class="row">
        <div class="col-md-12 text-center text-info">
            <h1 class="text-center text-white" style="background-image:url({{asset('img/carreras/fondo.png')}});background-size:cover; ">eMOVIES</h1>
            <h1>ESPACIO DE MOVILIDAD VIRTUAL EN EDUCACIÓN SUPERIOR - eMOVIES (Periodo 2020 - II)<h1>
        </div>
        <div class="col-md-12 text-center">
        <embed src="{{asset('protocolo_emovies_esp_2020.pdf')}}" class="w-75" height="700px" alt="pdf" >

        </div>
    </div>
    <div class="row">
        <div class="card">
            <div class="card-header text-center">
               
                <h1>CATÁLOGO DE CURSOS 2020-II</h1>
                    
            </div>
            <div class="card-body">
                @include('emovies_catalogo')
            </div>
        </div>
    </div>
{{-- end row --}}
</div>
{{-- end container --}}
@endsection
