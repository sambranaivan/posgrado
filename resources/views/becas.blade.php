@extends('layouts.app')

@section('content')
<div class="container-fluid">

        <div class="row">
                <div class="col-md-12 text-center text-info">
                <h1 class="text-center text-white" style="background-image:url({{asset('img/carreras/fondo.png')}});background-size:cover; ">Becas y Subsidios</h1>
                </div>
                <div class="col-md-8 offset-md-2">

                        <div class="card text-center">
                            <div class="card-header">
                                 <h4 class="card-title">CONVOCATORIA DE MOVILIDAD INTERNACIONAL 2019/2020</h4>
                            </div>
                            <div class="card-body">
                                <p>para que estudiantes a nivel licenciatura y posgrado participen en un Intercambio Académico en la Universidad del Valle de Atemajac (UNIVA), durante el siguiente periodo académico de primavera 2020.</p>
                                <p class="card-text text-center">
                                        <img class="img-fluid" src="{{asset('img/univa.png')}}" alt="">

                                </p>
                            <a href="{{asset('univa.pdf')}}" taget="_blank" class="btn btn-success">Descargar</a>

                            </div>
                        </div>


                </div>

        </div>

</div>
{{-- end container --}}
@endsection
