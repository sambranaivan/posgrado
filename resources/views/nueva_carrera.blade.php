@extends('layouts.app')

@section('content')
<div class="container">
   <div class="card">
       <div class="card-header">
        <h2>Nueva Carrera</h2>
       </div>
       <div class="card-body">
            <form action="" method="post">
                @csrf
                <div class="row">
                     <div class="col-md-12">
                            <div class="form-group">
                                <label for="nombre">Nombre</label>
                                <input type="text" class="form-control" name="nombre" id="" aria-describedby="helpId" placeholder="">
                                <small id="helpId" class="form-text text-muted">Help text</small>
                            </div>
                      </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="denominacion">Clasificación</label>
                            <select class="form-control" name="denominacion" id="">
                               @foreach ($denominaciones as $item)
                            <option value={{$item->id}}>{{$item->descripcion}}</option>
                               @endforeach

                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">


                        <div class="form-group">
                            <label for="unidad">Unidad Académica</label>
                            <select class="form-control" name="unidad" id="">
                               @foreach ($unidades as $item)
                            <option value={{$item->id}}>{{$item->nombre}}</option>
                               @endforeach

                            </select>
                        </div>

                    </div>

            </div>
                {{-- nombre
                facultad
                resolucion
                modalidad
                responsable
                contacto
                fecha de inscripcion --}}
            </form>
       </div>
   </div>
</div>
{{-- end container --}}
@endsection
