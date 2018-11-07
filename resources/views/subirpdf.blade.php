@extends('layouts.app')

@section('content')
<div class="container">



<form class="form-group"  method="POST" action="/subir">
    @csrf
<div class="from-group">
    <label for="Archivo"></label>
    <input type="file" name="pdf" class="form-control" enctype="multipart/form-data">
</div>
<button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>
{{-- end container --}}
@endsection
