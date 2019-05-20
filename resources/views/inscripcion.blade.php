@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
<div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-10"><h2>Inscripción</h2></div>
                    </div>
                </div>

                <div class="card-body">

                <form method="POST" action="{{route('guardarInscripcion')}}" class="form" enctype="multipart/form-data">
                    @csrf


                    {{-- Apellido y Nombre: --}}
                    <div class="form-group">
                      <label for="nombre">Nombre</label>
                      <input type="text" class="form-control" name="nombre"   required>
                    </div>
                    <div class="form-group">
                      <label for="apellido">Apellido</label>
                      <input type="text" class="form-control" name="apellido"   required>
                    </div>
                    {{-- CUIL (*): --}}
                    <div class="form-group">
                      <label for="text">CUIL</label>
                      <input type="number" class="form-control" name="cuil"   required>
                    </div>
                    {{-- Fecha de nacimiento: --}}
                    <div class="form-group">
                      <label for="nacimiento">Fecha de Nacimiento</label>
                      <input type="date" class="form-control" name="nacimiento"   required>
                    </div>
                    {{-- Correo electrónico:  --}}
                    <div class="form-group">
                      <label for="email">Dirección de Email</label>
                      <input type="email" class="form-control" name="email"   required>
                    </div>
                    {{-- TE: --}}
                    <div class="form-group">
                      <label for="telefono">Teléfono</label>
                      <input type="text" class="form-control" name="telefono"   required>
                    </div>
                    {{-- Domicilio: --}}
                    <div class="form-group">
                      <label for="domicilio">Domicilio</label>
                      <input type="text" class="form-control" name="domicilio"   required>
                    </div>
                    {{-- Ciudad: --}}
                    <div class="form-group">
                      <label for="ciudad">Ciudad</label>
                      <input type="text" class="form-control" name="ciudad"   required>
                    </div>
                    {{-- Facultad: --}}
                    <div class="form-group">
                      <label for="facultad">Facultad</label>
                      <input type="text" class="form-control" name="facultad"   required>
                    </div>
                    {{-- Cargo docente actual: --}}
                    <div class="form-group">
                      <label for="cargo">Cargo Docente Actual</label>
                      <input type="text" class="form-control" name="cargo"   required>
                    </div>
                    {{-- Resolución Nº....................CD/CS (**)		Fecha: ....................... --}}
                    <div class="form-group">
                      <label for="resolucion">Resolución Nº....................CD/CS (**)</label>
                      <input type="text" class="form-control" name="resolucion"   required>
                    </div>
                    <div class="form-group">
                      <label for="fecha_cargo">fecha</label>
                      <input type="date" class="form-control" name="fecha_cargo"   required>
                    </div>

                    {{-- (*) Adjuntar Comprobante del Número de CUIL, en formato digital (PDF). --}}
                    <div class="form-group">
                      <label for="file_cuil">(*) Adjuntar Comprobante del Número de CUIL, en formato digital (PDF).</label>
                      <input type="file" class="form-control-file" name="file_cuil" required>
                    </div>
                    {{-- (**) Adjuntar Resolución de designación del cargo docente o beca, en formato digital (PDF). --}}
                    <div class="form-group">
                      <label for="file_resolucion">(**) Adjuntar Resolución de designación del cargo docente o beca, en formato digital (PDF).</label>
                      <input type="file" class="form-control-file" name="file_resolucion" required>
                    </div>
                    {{-- Certifico que el postulante reviste en esta Facultad como se consigna precedentemente. --}}
                    {{-- <h3>///...Anexo I</h3> --}}
                    <h4>Datos de los estudios de posgrado:</h4>
                    {{-- Institución: --}}
                    <div class="form-group">
                      <label for="intitucion">Institución</label>
                      <input type="text" class="form-control" name="intitucion"   required>
                    </div>
                    {{-- Nombre de la Carrera: --}}
                    <div class="form-group">
                      <label for="carrera">Nombre de la Carrera</label>
                      <input type="text" class="form-control" name="carrera"   required>
                    </div>
                    {{-- Duración de la Carrera: --}}
                    <div class="form-group">
                      <label for="duracion">Duración de la Carrera:</label>
                      <input type="text" class="form-control" name="duracion"   required>
                    </div>
                    {{-- Título a obtener:  --}}
                    <div class="form-group">
                      <label for="titulo">Título a obtener</label>
                      <input type="text" class="form-control" name="titulo"   required>
                    </div>
                    {{-- Fecha de inicio: --}}
                    <div class="form-group">
                      <label for="carrera_inicio">Fecha de Inicio</label>
                      <input type="date" class="form-control" name="carrera_inicio"   required>
                    </div>
                    {{-- Costo total de la carrera: --}}
                    <div class="form-group">
                      <label for="carrera_costo">Costo total de la carrera: </label>
                      <input type="number" class="form-control" name="carrera_costo"   required>
                    </div>
                    {{-- Aranceles Año 1 --}}
                    <div class="form-group">
                      <label for="aranceles_1">Aranceles Año 1: </label>
                      <input type="number" class="form-control" name="aranceles_1"   required>
                    </div>
                    {{-- Aranceles Año 2 --}}
                    <div class="form-group">
                      <label for="aranceles_2">Aranceles Año 2: </label>
                      <input type="number" class="form-control" name="aranceles_2"   required>
                    </div>
                    {{-- Aranceles Año 3 --}}
                    <div class="form-group">
                      <label for="aranceles_3">Aranceles Año 3: </label>
                      <input type="number" class="form-control" name="aranceles_3"   required>
                    </div>
                    {{-- Aranceles Año 4 --}}
                    <div class="form-group">
                      <label for="aranceles_4">Aranceles Año 4: </label>
                      <input type="number" class="form-control" name="aranceles_4"   required>
                    </div>
                    {{-- Adjuntar Resolución de aranceles y costo total de la carrera, y constancia de alumno regular de posgrado y certificación del estado de cuenta, todo en formato digital (PDF). --}}
                    <div class="form-group">
                      <label for="file_aranceles">Adjuntar Resolución de aranceles y costo total de la carrera(PDF)</label>
                      <input type="file" class="form-control-file" name="file_aranceles" required>
                    </div>
                     <div class="form-group">
                      <label for="file_posgrado">Adjuntar Constancia de Alumno Regular de Posgradp(PDF)</label>
                      <input type="file" class="form-control-file" name="file_posgrado" required>
                    </div>
                    <div class="form-group">
                      <label for="file_cuenta">Certificación de estado de cuenta</label>
                      <input type="file" class="form-control-file" name="file_cuenta" required>
                    </div>
                     <div class="form-group">
                      <label for="file_cv">adjuntar el Curriculum Vitae completo del solicitante, según el formato establecido en el Anexo IX de la Ordenanza de Carrera Docente de la UNNE (Resolución Nº 956/09 CS) o  en formato CVar del MinCyT (http://cvar.sicytar.mincyt.gob.ar), en formato digital (PDF).</label>
                      <input type="file" class="form-control-file" name="file_cv" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>




                    {{-- Firma del solicitante --}}
                    {{--  --}}

                    {{-- Lugar y Fecha: --}}


                    {{-- <p>Nota: <br>
                    Se deberá adjuntar el Curriculum Vitae completo del solicitante, según el formato establecido en el Anexo IX de la Ordenanza de Carrera Docente de la UNNE (Resolución Nº 956/09 CS) o  en formato CVar del MinCyT (http://cvar.sicytar.mincyt.gob.ar), en formato digital (PDF).
                    Toda la información digital requerida deberá ser presenta en un CD acompañando la nota de elevación con el presente formulario de inscripción.</p> --}}
                </form>





                </div>
            </div>{{-- end card --}}


    </div>{{-- end col --}}
</div>
{{-- end row --}}
</div>
{{-- end container --}}
@endsection
