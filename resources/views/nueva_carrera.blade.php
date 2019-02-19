@extends('layouts.app')

@section('content')
<div class="container">
    @isset($carrera)
        <div class="alert alert-primary" role="alert">
        <strong>Carrera {{$carrera}} creada</strong>
        </div>
    @endisset
   <div class="card">
       <div class="card-header">
        <h2>Nueva Carrera</h2>
       </div>
       <div class="card-body">
            <form action="/addcarrera" method="post">
                @csrf
                <div class="row">
                     <div class="col-md-12">
                            <div class="form-group">
                                <label for="nombre">Nombre</label>
                                <input type="text" class="form-control" name="nombre" id="" aria-describedby="helpId" placeholder="" required>

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

                    <div class="col-md-6">
                            <div class="form-group">
                                <label for="responsable">Responsable</label>
                                <input type="text" class="form-control" name="responsable" id="" aria-describedby="helpId" placeholder="">

                            </div>
                             <div class="form-group">
                                <label for="contacto">Contacto</label>
                                <input type="text" class="form-control" name="contacto" id="" aria-describedby="helpId" placeholder="">

                            </div>
                            <div class="form-group">
                                <label for="telefono">Teléfono</label>
                                <input type="text" class="form-control" name="telefono" id="" aria-describedby="helpId" placeholder="">

                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" name="email" id="" aria-describedby="helpId" placeholder="">

                            </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="modalidad">Modalidad</label>
                            <select class="form-control" name="Modalidad" id="">

                            <option value="Presencial">Presencial</option>
                            <option value="Presencial con Apoyo Virtual">Presencial con apoyo Virtual</option>
                            <option value="Virtual">Virtual</option>


                            </select>
                        </div>
                        <div class="form-group">
                                <label for="resolucion">Resolución</label>
                                <input type="text" class="form-control" name="resolucion" id="" aria-describedby="helpId" placeholder="" required>

                            </div>
                            <div class="form-group">
                                <label for="incripcion">Fechas de inscripcion</label>
                                <input type="text" class="form-control" name="inscripcion" id="" aria-describedby="helpId" placeholder="" required>

                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Enviar</button>
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
