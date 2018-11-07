@extends('layouts.app')

@section('content')
<div class="container">



<form class="form-group"  method="POST" action="/subir" enctype="multipart/form-data">
    @csrf
<div class="from-group">
    <label for="archivo"></label>
    <input type="file" name="archivo" class="form-control-file">
</div>
<button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>
{{-- end container --}}
@endsection
