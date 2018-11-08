@extends('layouts.app')

@section('content')
<div class="container">



<form  method="POST" action="/subir" enctype="multipart/form-data">
    @csrf

    <div class="from-group">
        <label for="titulo"></label>
        <input type="text" name="titulo" class="form-control">
    </div>

    <div class="from-group">
        <label for="archivo"></label>
        <input type="file" name="archivo" class="form-control-file">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>
{{-- end container --}}
@endsection
