@extends('layouts.app')

@section('content')
@extends('layouts.app')

@section('content')
<div class="container-fluid">

    <div class="row">
        <div class="col-md-12 text-center text-info">
            <h1 class="text-center text-white" style="background-image:url({{asset('img/carreras/fondo.png')}});background-size:cover; ">Guía de Trámites</h1>
        </div>
        <div class="col-md-12 text-center">
            <h3 class="text-muted">..En Construcción</h3>
        </div>
    </div>
{{-- end row --}}
</div>
{{-- end container --}}
@endsection

{{-- <div class="container">
    <div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                 <h4 class="text-center text-info text-center"> Guia de Trámites</h4>
            </div>
            <div class="col-md-2">
                @auth
                    @if(Auth::user()->id == 1)

                        <a href="nuevotramite" class="btn btn-primary" href="#" role="button">Nuevo Trámite</a>
                    @endif
                @endauth
            </div>
        </div>
    </div>
      <div class="card-body">
        <div class="list-group">
        @foreach ($tramites as $item)
        <a href="{{asset('pdf/tramites/'.$item->file)}}" class="list-group-item list-group-item-action"><b>{{$item->titulo}}</b></a>
        @endforeach

    </div>
      </div>
    </div>

</div> --}}
{{-- end container --}}
@endsection
