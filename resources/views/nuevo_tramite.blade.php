@extends('layouts.app')

@section('content')
<div class="container">
 <div class="row justify-content-center">
<div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-10"><h2>Nueva Guía de Trámites</h2></div>
                    </div>
                </div>
                <div class="card-body">
                        <form  method="POST" action="/nuevotramite" enctype="multipart/form-data">
                            @csrf

                           <div class="from-group">
                                <label for="titulo">Titulo</label>
                                <input type="text" name="titulo" class="form-control">
                            </div>


                            <div class="from-group">
                                <label for="archivo">Archivo PDF</label>
                                <input type="file" name="archivo" class="from-control form-control-file">
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
