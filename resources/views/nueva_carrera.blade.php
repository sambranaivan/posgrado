@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
<div class="col-md-10">
         <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-12"><h2>Nueva Carrera</h2></div>
                    </div>
                </div>
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                              <label for="nombre">Nombre de la Carrera</label>
                              <input type="text" name="nombre" id="frm_carrera" class="form-control" placeholder="" aria-describedby="helpId">
                              {{--  <small id="helpId" class="text-muted">Help text</small>  --}}
                            </div>
                            <div class="form-group">
                              <label for="nombre">Titulo que otorga</label>
                              <input type="text" name="titulo" id="frm_titulo" class="form-control" placeholder="" aria-describedby="helpId">
                              {{--  <small id="helpId" class="text-muted">Help text</small>  --}}
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-4">
                                     <label for="nombre">Resolución C.S</label>
                                     <input type="text" name="titulo" id="frm_cs" class="form-control" placeholder="" aria-describedby="helpId">
                                       <input type="file" id="fileselect" name="filecs" class="form-control">

                                {{--  <small id="helpId" class="text-muted">Help text</small>  --}}
                                </div>
                                <div class="col-md-4">
                                    <label for="nombre">Resolución CONEAU</label>
                                    <input type="text" name="nombre" id="frm_coneau" class="form-control" placeholder="" aria-describedby="helpId">
                                    <input type="file" id="fileselect" name="filecs" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <label for="nombre">Resolución Ministerio de Educación</label>
                                    <input type="text" name="nombre" id="frm_me" class="form-control" placeholder="" aria-describedby="helpId">
                                    <input type="file" id="fileselect" name="fileme" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                              <label for="">Descripción de la Carrera</label>
                              <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">

                            </div>
                            </div>
                        </form>

                    </div>
            </div>{{-- end card --}}


    </div>{{-- end col --}}
</div>
{{-- end row --}}
</div>
{{-- end container --}}
@endsection
