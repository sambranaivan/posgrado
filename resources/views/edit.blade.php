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

  {{-- <li class="nav-item">
    <a class="nav-link" id="academica-tab" data-toggle="tab" href="#academica" role="tab" aria-controls="academica" aria-selected="false">Unidad Académica</a>
  </li> --}}
  <li class="nav-item">
    <a class="nav-link" id="autoridad-tab" data-toggle="tab" href="#autoridad" role="tab" aria-controls="autoridad" aria-selected="false">Responsables</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="resolucion-tab" data-toggle="tab" href="#resolucion" role="tab" aria-controls="resolucion" aria-selected="false">Resoluciones</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="carrera" role="tabpanel" aria-labelledby="carrera-tab">
    <div class="card ">

      <div class="card-body">



        <div class="form-inline row">


                <div class="form-group col-md-12">
                  <label for="" class="col-md-3">Nombre :</label>
                  <input type="text" class="form-control col-md-9" disabled value="{{$carrera->nombre}}">
                </div>
                 <div class="form-group col-md-12">
                  <label for="" class="col-md-3">Unidad Académica :</label>
                  <input type="text" class="form-control col-md-9" disabled value="{{$carrera->unidad->nombre}}">
                </div>
                <div class="form-group col-md-12">
                  <label for="" class="col-md-3">Denominación :</label>
                  <input type="text" class="form-control col-md-9" disabled value="{{$carrera->denominacion->descripcion}}">
                </div>
                 @if ($carrera->denominacion_id < 4)
                     <div class="form-group col-md-12">
                  <label for="" class="col-md-3">Área Disciplinar :</label>
                  <input type="text" class="form-control col-md-9" disabled value="{{$carrera->area}}">
                </div>
                 @endif





        </div>


    <form method="POST" action="/editarCarreraFecha" class="form-inline row">
       {{ csrf_field() }}

            <input type="hidden" class="form-control" name="id" value="{{$carrera->id}}">

            <div class="form-group col-md-8">
                <label for="inscripcion" class="col-md-5">Fechas de Inscripción : </label>
                <input type="text" class="form-control col-md-7" name="inscripcion" id="" aria-describedby="helpId" value="{{$carrera->descripcion}}">
            </div>

             <div class="form-group col-md-1">
             <button type="submit" class="btn btn-primary btn-sm form-control">Actualizar Fecha de Inscripción</button>
             </div>
    </form>
     <form method="POST" action="/editarCarreraModalidad" class="form-inline row">
       {{ csrf_field() }}

            <input type="hidden" class="form-control" name="id" value="{{$carrera->id}}">


            <div class="form-group col-md-8">


                  <label for="modalidad" class="col-form-label col-md-5">Modalidad</label>
                  <select class="form-control col-md-7" name="modalidad" id="">
                    <option value="Presencial" @if($carrera->modalidad == 'Presencial') selected @endif>Presencial</option>
                    <option value="Presencial con Apoyo Virtual" @if($carrera->modalidad == 'Presencial con Apoyo Virtual') selected @endif>Presencial con Apoyo Virtual</option>
                    <option value="Virtual" @if($carrera->modalidad == 'Virtual') selected @endif>Virtual</option>
                  </select>

            </div>


             <div class="form-group col-md-1">
             <button type="submit" class="btn btn-primary btn-sm form-control">Actualizar Modalidad</button>
             </div>

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
  {{-- TAB AUTORIDADES --}}
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
            </ul>
            <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#autoridadModal">
  Nueva Designación
</button>

<!-- Modal -->
<div class="modal fade" id="autoridadModal" tabindex="-1" role="dialog" aria-labelledby="autoridadModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="autoridadModalLabel">Nueva Designacion</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        {{-- ///form de alta de autoridad --}}
        <form method="POST"  action="/nuevoAutoridad">
            @csrf
            <input type="hidden" name="id" value="{{$carrera->id}}" >
            <div class="form-group">
              <label for="cargo">Cargo</label>
              <input type="text" name="cargo" id="" class="form-control" placeholder="Cargo" aria-describedby="helpId" required>
            </div>
            <div class="form-group">
              <label for="nombre">Nombre</label>
              <input type="text" name="nombre" id="" class="form-control" placeholder="nombre" aria-describedby="helpId" required>
            </div>
            <div class="form-group">
              <label for="email">Direccion de Correo Electrónico</label>
              <input type="email" name="email" id="" class="form-control" placeholder="email" aria-describedby="helpId">
            </div>
            <div class="form-group">
              <label for="contacto">Teléfono de contacto</label>
              <input type="text" name="contacto" id="" class="form-control" placeholder="contacto" aria-describedby="helpId">
            </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
      </div>
      {{-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        {{-- <button type="button" class="btn btn-primary">Enviar</button>
      </div> --}}
    </div>
  </div>
</div>
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


                            @if (Auth::user()->id == 1)
                                <button onclick="location.href='/edit/resolucion/{{$item->id}}'"  class="btn btn-sm float-right ">
                                    <i class="fas fa-edit    "></i>
                                </button>

                            @endif

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
