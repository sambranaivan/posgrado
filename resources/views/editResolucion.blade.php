@extends('layouts.app')

@section('content')
<div class="container">
 <div class="row justify-content-center">
<div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-10"><h2>Editar Resolución</h2></div>
                    </div>
                </div>
                <div class="card-body">
                        <form  method="POST" action="/update/resolucion" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{$resolucion->id}}">
                            <div class="from-group">
                                <label for="descripcion">Descripcion</label>
                                <input type="text" name="descripcion" class="form-control" value="{{$resolucion->descripcion}}">
                            </div>

                            <div class="from-group">
                                <label for="codigo">Codigo</label>
                                <input type="text" name="codigo" class="form-control" value="{{$resolucion->codigo}}">
                            </div>

                            <div class="from-group">
                                <label for="archivo"></label>
                                <input type="file" name="archivo" class="from-control form-control-file" value="{{$resolucion->file}}">
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                </div>
            </div>{{-- end card --}}


    </div>{{-- end col --}}
</div>
{{-- end row --}}




</div>
{{-- end container --}}
@endsection
