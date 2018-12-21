@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
<div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-12 text-info text-center"><h2>Carreras de la {{Auth::user()->unidad->nombre}}</h2></div>
                    </div>
                </div>
                <div class="card-body">
            <div class="list-group">

                @foreach ($carreras as $item)
                        <a href="/edit/{{$item->id}}" class="list-group-item list-group-item-action text-center">{{$item->nombre}}</a>
                @endforeach

            </div>
                </div>
            </div>{{-- end card --}}


    </div>{{-- end col --}}
</div>
{{-- end row --}}
</div>
{{-- end container --}}
@endsection
