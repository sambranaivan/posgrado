@extends('layouts.app')

@section('content')
<div class="container-fluid">

        <div class="row">
                <div class="col-md-12 text-center text-info">
                <h1 class="text-center text-white" style="background-image:url({{asset('img/carreras/fondo.png')}});background-size:cover; ">Becas y Subsidios</h1>
                </div>
                <div class="col-md-8 offset-md-2">
                    {{--  --}}

                    {{--  --}}
  <div class="card">
                <div class="card-header text-center">

                        <h2>Inscripción a la Convocatoria de Subsidios para realizar carreras de Posgrado</h2>

                </div>

                <div class="card-body">
                <div class="text-justify">
                    <p>Podrán aspirar a los subsidios para realizar carreras de Doctorado, Maestría y Especialización, los docentes de la UNNE por concurso o interinos, y los becarios de la Secretaría General de Ciencia y Técnica de la UNNE, becarios de becas cofinanciadas CONICET-UNNE y de proyectos PICTO-UNNE.</p>
                    <p>Los aspirantes deberán estar inscriptos en la carrera al momento de la presentación. Aquellos que estuvieren inscriptos en más de una carrera de posgrado podrán solicitar el subsidio para realizar sólo una de ellas, no deben superar los 45 años de edad para postularse a los subsidios de carreras de Doctorado o Maestría, y los 50 años para Especialización, al día 31 de diciembre del año de la convocatoria.</p>
                    <p>El aspirante deberá presentar todos sus antecedentes personales, académicos y de investigación, así como los relacionados con los estudios de posgrado que aspira a realizar, cumplimentando en su totalidad el formulario online. Por mesa de Entrada/Salidas Rectorado deberá presentar únicamente la nota con la solicitud. La Secretaria General de Posgrado con la presentación de la nota corroborará que la documentación se haya subido correctamente y se confirmará la inscripción mandando un mail al postulante.</p>
                </div>

                <div class="text-center">
                    <a name="" id="" class="btn btn-danger white " href="{{asset('pdf/2018-301-Convocatoria2019.pdf')}}" target="_blank" role="button">Descargar Convocatoria 2019
                        <i class="fas fa-file-pdf" aria-hidden="true"></i>
                    </a>
                        <a name="" id="" class="btn btn-danger white " href="{{asset('pdf/2019-0300-nuevo-reglamento-de-subsidios-estudios-de-posgrado.pdf')}}" target="_blank" role="button">Descargar Reglamento de Subsidios
                        <i class="fas fa-file-pdf" aria-hidden="true"></i>
                    </a>
                <a class="btn btn-primary " href="{{route('inscripcion')}}">Ir a Formulario de Inscripción
                    <i class="fas fa-form" aria-hidden="true"></i>
                </a>

                </div>
            </div>
                     <div class="card text-center">
                                            <div class="card-header">
                                                <h4 class="text-title">X Convocatoria General Del Programa De Movilidad en El Posgrado (PMP)
                                                De La Red De Macrouniversidades Públicas De América Latina Y El Caribe
                                                </h4>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-8 offset-md-2">
                                                    <div class="card-body">

                                                        <p class="card-text">
                                                            <img src="{{asset('img/afiche_2019.png')}}" class="img-thumbnail">
                                                        </p>


                                                        </div>
                                                </div>
                                                <div class="col-md-4">
                                                    {{-- <div class="btn-group-vertical"> --}}
                                                        <a target="_blank" href="{{asset('pdf/Carta_compromiso_para_la_adquisición_de_seguro_de_gastos_médicos.docx')}}" class="btn btn-block btn-sm btn-primary">
                                                           Carta de Compromiso
                                                           <i class="fas fa-file-word"></i>
                                                           </a>
                                                           <a target="_blank" href="{{asset('pdf/FORMATO_DE_SOLICITUD_Y_PLAN_DE_TRABAJO.docx')}}" class="btn btn-block btn-sm btn-primary">
                                                           Formato de solicitud y Plan de Trabajo
                                                           <i class="fas fa-file-word"></i>
                                                           </a>

                                                    {{-- </div> --}}
                                                </div>
                                                <div class="col-md-4">
                                                    {{-- <div class="btn-group-vertical"> --}}

                                                           <a target="_blank" href="{{asset('pdf/procedimiento_de_postulacion_para_estudiantes.pdf')}}" class="btn btn-block btn-sm btn-danger">
                                                           Procedimiento de postulación
                                                           <i class="fas fa-file-pdf"></i>
                                                           </a>
                                                            <a target="_blank" href="{{asset('pdf/Programa-2019-X Convocatoria_PMP.docx')}}" class="btn btn-block btn-sm btn-primary">
                                                           Programa X Convocatoria 2019
                                                           <i class="fas fa-file-word"></i>
                                                           </a>

                                                    {{-- </div> --}}
                                                </div>
                                                <div class="col-md-4">
                                                    {{-- <div class="btn-group-vertical"> --}}

                                                            <a target="_blank" href="{{asset('pdf/PROTOCOLO_PARA_POSTULACIONES_EN_LA_UNNE.docx')}}" class="btn btn-block btn-sm btn-primary">
                                                           Protocolo para postularse en la UNNE
                                                           <i class="fas fa-file-word"></i>
                                                           </a>
                                                    {{-- </div> --}}
                                                </div>


                                                </div>
                                            </div>










                    {{--  --}}
                    <p></p>

                    <div class="card">

                        <div class="card-header text-center">

                            <h4 class="card-title">II Convocatoria AUGM</h4>
                        </div>
                      <div class="card-body">


                                <strong>
                                    Se encuentra abierto el Segundo Llamado de la Convocatoria 2019.
                                </strong>
                                <p class="card-text">
                                    El Programa ESCALA de Estudiantes de Posgrado de AUGM promueve la cooperación y la integración de las Universidades que la conforman, así como la internacionalización de la educación superior de la Región, a través de la promoción de la movilidad de los estudiantes regulares de maestrías y doctorados, para cursar un período académico en otra Universidad Miembro de la Asociación de un país distinto al suyo, con pleno reconocimiento de la actividad académica realizada.
El programa se ejecutará por convocatorias regulares realizadas en cada año calendario.

                                </p>
                                <strong>Características y condiciones generales</strong>
                                   <p class="card-text">
Los estudiantes participantes podrán realizar actividades enmarcadas en su programa de estudios o de investigación y deberán provenir de programas de maestría o doctorado, siempre que hayan sido propuestos por sus Universidades de origen.
La aceptación de cada intercambio será cometido de la Universidad de destino de acuerdo a las postulaciones recibidas, y mediante procedimientos que la normativa y mecanismos que el Programa establece.
La extensión de la movilidad será de un mínimo de quince días y un máximo de un semestre académico.
La Universidad de origen del estudiante será responsable del financiamiento de los gastos de traslado y la Universidad de destino del estudiante será la responsable de los gastos de alojamiento y manutención.

                                </p>
                                <strong>Requisitos</strong></br>
                                       <p class="card-text">
Los Programas a los que aspire el estudiante deberán haber sido ofrecidos por la Universidad de destino en la consideración de la Convocatoria que realicen los órganos competentes.
El aspirante deberá estar matriculado como estudiante regular de maestría o de doctorado en su Universidad tanto en el momento de realizar la solicitud como en el momento de realizar la estancia en la universidad de destino, y tener aprobadas por lo menos el 30% de sus obligaciones académicas o su equivalente en créditos.
El estudiante deberá poseer conocimientos suficientes para cursar los estudios en el idioma en el que se imparten las clases en la Universidad de destino.

                                </p>
                                <p class="text-center">
                                <a name="" id="" class="btn btn-danger" href="{{asset('pdf/Reglamento-PEEP-modificado-nov2015.pdf')}}" role="button">
                                    Descargar Reglamento
                                    <i class="fas fa-file-pdf"></i>
                                </a>
                                </p>



                      </div>
                    </div>
                    {{--  --}}
                </div>
        </div>


</div>
{{-- end container --}}
@endsection
