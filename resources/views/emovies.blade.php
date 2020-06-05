@extends('layouts.app')

@section('content')
<div class="container-fluid">

    <div class="row">
        <div class="col-md-12 text-center text-info">
            <h1 class="text-center text-white" style="background-image:url({{asset('img/carreras/fondo.png')}});background-size:cover; ">eMOVIES</h2>
            <h1>ESPACIO DE MOVILIDAD VIRTUAL EN EDUCACIÓN SUPERIOR </br>eMOVIES (Periodo 2020 - II)<h2>
        </div>
        <div class="col-md-12 text-center">
        <embed src="{{asset('protocolo_emovies_esp_2020.pdf')}}" class="w-75" height="700px" alt="pdf" >

        </div>
    </div>
    <div class="row pt-3">
        <div class="col-12 text-center">
            <a href="https://docs.google.com/spreadsheets/d/1607jNs0w7-ASRkSC_k53YVpmUa_ozu3ccg27bgEsnMQ/edit?usp=sharing" class="btn btn-lg btn-success">IR AL CATÁLOGO DE CURSOS 2020-II</a>
        </div>
    </div>
    <div class="row d-none">
        <div class="card">
            <div class="card-header text-center">
               
                <h1>CATÁLOGO DE CURSOS 2020-II</h1>
                    
            </div>
            <div class="card-body">
                {{-- @include('emovies_catalogo') --}}
            </div>
        </div>
    </div>
{{-- end row --}}
</div>
{{-- end container --}}
@endsection
