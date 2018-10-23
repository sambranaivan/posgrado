@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
<div class="col-md-8">
<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="carrera-tab" data-toggle="tab" href="#carrera" role="tab" aria-controls="carrera" aria-selected="true">Carrera

    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="academica-tab" data-toggle="tab" href="#academica" role="tab" aria-controls="academica" aria-selected="false">Unidad Académica</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="autoridad-tab" data-toggle="tab" href="#autoridad" role="tab" aria-controls="autoridad" aria-selected="false">Autoridades</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="resolucion-tab" data-toggle="tab" href="#resolucion" role="tab" aria-controls="resolucion" aria-selected="false">Resoluciones</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="carrera" role="tabpanel" aria-labelledby="carrera-tab">
    <div class="card ">

      <div class="card-body">

        <form class="form" method="POST">
        {{ csrf_field() }}

        <div class="form-group">
          <label for="nombre">Nombre</label>
          <input type="text" name="nombre" id="frm_nombre" class="form-control" placeholder="" aria-describedby="helpId" value="{{$carrera->nombre}}">
          {{--  <small id="helpId" class="text-muted">Help text</small>  --}}
        </div>

        <div class="form-group">
          <label for="titulo">Título que otorga</label>
          <input type="text" name="titulo" id="frm_titulo" class="form-control" placeholder="" aria-describedby="helpId" value="{{$carrera->titulo}}">
          {{--  <small id="helpId" class="text-muted">Help text</small>  --}}
        </div>

        <div class="form-group">
            <label for="denominacion">Denominación</label>
            <select class="form-control" name="denominacion" id="denominacion">
                <option value="1">Especialización</option>
                <option value="2">Maestría</option>
                <option value="3">Doctorado</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar <i class="fas fa-sync-alt" aria-hidden="true"></i></button>

    </form>
      </div>
    </div>
  </div>
  <div class="tab-pane fade" id="academica" role="tabpanel" aria-labelledby="academica-tab">academica-tab</div>
  <div class="tab-pane fade" id="autoridad" role="tabpanel" aria-labelledby="autoridad-tab">autoridad-tab</div>
  <div class="tab-pane fade" id="resolucion" role="tabpanel" aria-labelledby="resolucion-tab">resolucion-tab</div>
</div>



    </div>{{-- end col --}}
</div>
{{-- end row --}}
</div>
{{-- end container --}}
@endsection
