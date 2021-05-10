@extends('layouts.app')

@section('content')

<div class="container-fluid">



                    <table class="table table-striped table-sm table-responsive  table-tip">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th class="fit">Apellido</th>
                                <th class="fit">Nombre</th>
                                <th class="fit">CV</th>
                            <th class="fit">Cuil</th>
                            <th class="fit">Fecha de Nacimiento</th>
                            <th class="fit">Email</th>
                            <th class="fit">Teléfono</th>
                            <th class="fit">Domicilio</th>
                            <th class="fit">Ciudad</th>
                            <th class="fit">Facultad</th>
                            <th class="fit">Cargo</th>
                            <th class="fit">Resolucion de Designación</th>
                            <th class="fit">Fecha de Cargo</th>
                            {{-- datos de la carrera --}}
                            <th class="fit">Institución</th>
                            <th class="fit">Carrera</th>
                            <th class="fit">Duración de la Carrera</th>
                            <th class="fit">Título a Obtener</th>
                            <th class="fit">Fecha de Inicio de Carrera</th>
                            <th class="fit">Costo Total de la Carrera</th>
                            <th class="fit">Aranceles Año 1</th>
                            <th class="fit">Aranceles Año 2</th>
                            <th class="fit">Aranceles Año 3</th>
                            <th class="fit">Aranceles Año 4</th>
                            <th class="fit">Estado de Cuenta</th>
                            {{-- <th>Constancia de Cuil</th> --}}
                            {{-- <th>Resolucion de Designacion</th> --}}
                            {{-- <th>file_aranceles</th> --}}
                            {{-- <th>file_posgrado</th> --}}
                            {{-- <th>file_cuenta</th> --}}
                            {{-- <th>file_cv</th> --}}
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($inscriptos as $i)
                            <tr>
                                <th>{{$i->id}}</th>
                            <td class="fit">{{$i->apellido}}</td>
                            <td class="fit">{{$i->nombre}}</td>
                            <td class="fit"><a href="{{asset('/pdf/inscripciones/2021/docentes/'.$i->file_cv)}}" class="btn btn-danger btn-sm"><i class="fas fa-file-pdf"></i></a></td>
                            <td class="fit">{{$i->cuil}}<a href="{{asset('/pdf/inscripciones/2021/docentes/'.$i->file_cuil)}}" class="btn btn-danger btn-sm"><i class="fas fa-file-pdf"></i></a>
                            </td>
                            <td class="fit">{{$i->nacimiento}}</td>
                            <td class="fit">{{$i->email}}</td>
                            <td class="fit">{{$i->telefono}}</td>
                            <td class="fit">{{$i->domicilio}}</td>
                            <td class="fit">{{$i->ciudad}}</td>
                            <td class="fit">{{$i->facultad}}</td>
                            <td class="fit">{{$i->cargo}}</td>
                            <td class="fit">{{$i->resolucion}}
                            <a href="{{asset('/pdf/inscripciones/2021/docentes/'.$i->file_resolucion)}}" class="btn btn-danger btn-sm"><i class="fas fa-file-pdf"></i></a>
                            </td>
                            <td class="fit">{{$i->fecha_cargo}}</td>
                            <td class="fit">{{$i->intitucion}}</td>
                            <td class="fit">{{$i->carrera}}
                            <a href="{{asset('/pdf/inscripciones/2021/docentes/'.$i->file_posgrado)}}" class="btn btn-danger btn-sm"><i class="fas fa-file-pdf"></i></a>
                            </td>
                            <td class="fit">{{$i->duracion}}</td>
                            <td class="fit">{{$i->titulo}}</td>
                            <td class="fit">{{$i->carrera_inicio}}</td>
                            <td class="fit">{{$i->carrera_costo}}
                            <a href="{{asset('/pdf/inscripciones/2021/docentes/'.$i->file_aranceles)}}" class="btn btn-danger btn-sm"><i class="fas fa-file-pdf"></i></a>
                            </td>
                            <td class="fit">{{$i->aranceles_1}}</td>
                            <td class="fit">{{$i->aranceles_2}}</td>
                            <td class="fit">{{$i->aranceles_3}}</td>
                            <td class="fit">{{$i->aranceles_4}}</td>
                            <td class="fit"><a href="{{asset('/pdf/inscripciones/2021/docentes/'.$i->file_cuenta)}}" class="btn btn-danger btn-sm"><i class="fas fa-file-pdf"></i></a></td>





                            </tr>

                            @endforeach
                            </tbody>
                    </table>


</div>
{{-- end container --}}
@endsection
