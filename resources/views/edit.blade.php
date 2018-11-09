@extends('layouts.app')

@section('content')

<div class="container">

    <div class="row justify-content-center">
<div class="col-md-8">
    @if ($mensaje = Session::get('info'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  <strong>{{$mensaje}}</strong>
</div>

<script>
  $(".alert").alert();
</script>
    @endif
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

        <form class="form" action="/editarCarrera"method="POST">
        {{ csrf_field() }}

            <input type="hidden" class="form-control" name="id" value="{{$carrera->id}}">
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
                <option value="1"
                @if ($carrera->denominacion_id == 1)
                    selected
                @endif
                >Especialización</option>
                <option value="2"
                @if ($carrera->denominacion_id == 2)
                    selected
                @endif
                >Maestría</option>
                <option value="3"
                @if ($carrera->denominacion_id == 3)
                    selected
                @endif
                >Doctorado</option>
            </select>
        </div>

        {{--  muestro todas la unidades academicas y elijo la mia noma   --}}

            <div class="form-group">
              <label for="unidad">Unidad Académica</label>
              <select class="form-control" name="unidad" id="" disabled>
                @foreach ($unidades as $unidad)
                    <option value="{{$unidad->id}}"
                        @if ($unidad->id == $carrera->unidad_id)
                        selected
                        @endif
                        >
                        {{$unidad->nombre}}
                    </option>
                @endforeach
              </select>

        </div>


        <button type="submit" class="btn btn-primary">Actualizar <i class="fas fa-sync-alt" aria-hidden="true"></i></button>

    </form>
      </div>
    </div>
  </div>
  <div class="tab-pane fade" id="academica" role="tabpanel" aria-labelledby="academica-tab">
      <div class="card">
        <div class="card-body">
            <form action="edit/unidad" method="post">
                @csrf

                <div class="form-group">
                  <label for="unidad">Nombre</label>
                  <input type="hidden" name="unidad_id" value="{{$carrera->unidad_id}}">
                  <input type="text" class="form-control" name="nombre" id="" aria-describedby="helpId" placeholder="" value="{{$carrera->unidadAcademica->nombre}}">
                </div>

                <div class="form-group">
                  <label for="direccion">Domicilio</label>
                  <input type="text" class="form-control" name="direccion" id="" aria-describedby="helpId" placeholder="" value="{{$carrera->unidadAcademica->domicilio}}">
                </div>

                <div class="form-group">
                  <label for="contacto">Telefono</label>
                  <input type="text" class="form-control" name="telefono" id="" aria-describedby="helpId" placeholder="" value="{{$carrera->unidadAcademica->telefono}}">
                </div>
            </form>
        </div>
      </div>
  </div>
  <div class="tab-pane fade" id="autoridad" role="tabpanel" aria-labelledby="autoridad-tab">
    <h3 class="text-muted text-center">Designaciones</h3>
    <div class="card">
        <div class="card-body">
            <ul class="list-group">


                @foreach ($carrera->autoridades as $autoridad)
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-md-12"><h3 class="text-muted text-center">{{$autoridad->cargo}}</h3></div>
                        <div class="col-md-4">{{$autoridad->nombre}}</div>
                        <div class="col-md-3">Tel: {{$autoridad->contacto}}</div>
                        <div class="col-md-3">Email: {{$autoridad->email}}</div>
                        <div class="col-md-2">
                            <a href="/edit/autoridad/{{$autoridad->id}}" class="btn btn-primary btn-sm btn-block">
                                <i class="fas fa-edit"></i>
                            </a>
                        </div>
                    </div>
                </li>


                @endforeach
                <li class="list-group-item">
                <div class="row">
                    <div class="col-md-12">
                            <button type="button" name="" id="" class="btn btn-primary btn-sm">Nueva Designación</button>
                    </div>
                </div>
                </li>
            </ul>
        </div>

    </div>


  </div>
  <div class="tab-pane fade" id="resolucion" role="tabpanel" aria-labelledby="resolucion-tab">


      <div class="row" id="listadoResoluciones">
            <div class="col-md-12">
                    @foreach ($carrera->resoluciones as $item)

                        <div class="list-group">
                            <li class="list-group-item clearfix">
                            {{$item->descripcion.": ".$item->codigo }}


                            <button onclick="location.href='/edit/resolucion/{{$item->id}}'"  class="btn btn-sm float-right ">
                                    <i class="fas fa-edit    "></i>
                                </button>

                            @if($item->file)
                                <a href="{{asset('/pdf/resoluciones/'.$item->file)}}" class="btn btn-sm float-right btn-danger">
                                    <i class="fas fa-file-pdf    "></i>
                                </a>
                            @else
                                <button onclick="" class="btn btn-sm float-right btn-success">
                                    <i class="fas fa-file-upload    "></i>
                                </button>
                            @endif



                            </li>

                        </div>
                        @endforeach
                    </div>
        </div>




  </div>
</div>



    </div>{{-- end col --}}
</div>
{{-- end row --}}
</div>
{{-- end container --}}
@endsection
