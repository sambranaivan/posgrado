@extends('layouts.app')

@section('content')
<div class="container">

<div class="list-group">

   @foreach ($carreras as $item)
        <a href="/edit/{{$item->id}}" class="list-group-item list-group-item-action">{{$item->nombre}}</a>
   @endforeach

</div>
{{-- end row --}}
</div>
{{-- end container --}}
@endsection
