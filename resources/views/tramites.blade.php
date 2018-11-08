@extends('layouts.app')

@section('content')
<div class="container">

    <div class="list-group">
        @foreach ($tramites as $item)
        <a href="{{asset('pdf/tramites/'.$item->file)}}" class="list-group-item list-group-item-action">{{$item->titulo}}</a>
        @endforeach

    </div>
</div>
{{-- end container --}}
@endsection
