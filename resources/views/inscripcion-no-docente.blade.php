@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
<div class="col-md-10">
            <div class="card">
                <div class="card-header text-center">

                        <h2>Subsidios para la realización de Carreras de Posgrado de Especialización y Maestrías para Agentes No Docentes</h2>

                </div>

                <div class="card-body">
                    <h2>Formulario de Inscripción</h2>

                    .<div class="alert alert-danger" role="alert">
                      <h4 class="alert-heading">Importante</h4>
                      <p>Se recuerda que se debe presentar la nota de solicitud en Mesa de Entradas/Salidas (Resistencia/Rectorado), para que la presentación del formulario online sea considerada</p>
                      <p>La Secretaria General de Posgrado con la presentación de la nota corroborará que la documentación se haya subido correctamente y se confirmará la inscripción mandando un mail al postulante.</p>
                      <p class="mb-0"></p>
                    </div>

                <form method="POST" action="{{route('guardarInscripcionNoDocente')}}" class="form" enctype="multipart/form-data">
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
                      <label for="text">Cuil</label>
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
                      <label for="unidad">Unidad Académica/ Instituto</label>
                      <input type="text" class="form-control" name="unidad"   required>
                    </div>
                    {{-- Cargo docente actual: --}}
                    <div class="form-group">
                      <label for="cargo">Cargo y Situación de Revista</label>
                      <input type="text" class="form-control" name="cargo"   required>
                    </div>
                    <div class="form-group">
                      <label for="actividad">Actividad que desempeña</label>
                      <input type="text" class="form-control" name="actividad" required>
                    </div>
                    {{-- Resolución Nº....................CD/CS (**)		Fecha: ....................... --}}
                    <div class="form-group">
                      <label for="resolucion">Resolución Nº.................... (**)</label>
                      <input type="text" class="form-control" name="resolucion"   required>
                    </div>
                    <div class="form-group">
                      <label for="fecha_cargo">Fecha de designación</label>
                      <input type="date" class="form-control" name="fecha_cargo"   required>
                    </div>

                    {{-- (*) Adjuntar Comprobante del Número de CUIL, en formato digital (PDF). --}}
                    <div class="form-group">
                      <label for="file_cuil">(*) Adjuntar Comprobante del Número de CUIL, en formato digital (PDF).</label>
                      <input type="file" class="form-control-file" name="file_cuil" required>
                    </div>
                    {{-- (**) Adjuntar Resolución de designación del cargo docente o beca, en formato digital (PDF). --}}
                    <div class="form-group">
                      <label for="file_resolucion">(**) Adjuntar Resolución de designación del cargo en formato digital (PDF).</label>
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

                     <div class="form-group">
                      <label for="file_cv">Adjuntar el Curriculum Vitae completo del solicitante, formato digital (PDF).</label>
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
