@extends('layouts.app')

@section('content')
<div class="container-fluid">

    <div class="row">
        <div class="col-md-12 text-center text-info">
            <h1 class="text-center text-white" style="background-image:url({{asset('img/carreras/fondo.png')}});background-size:cover; ">eMOVIES</h1>
        </div>
        <div class="col-md-12 text-center">
        <embed src="{{asset('protocolo_emovies_esp_2020.pdf')}}" class="w-75" height="700px" alt="pdf" >

        </div>
    </div>
{{-- end row --}}
</div>
{{-- end container --}}
@endsection
