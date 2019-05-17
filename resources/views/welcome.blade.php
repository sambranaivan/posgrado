@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
<div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-12"><h2 class="text-info">Noticias</h2></div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-10 offset-md-1   ">
                                        <div class="card text-center">
                                            <div class="card-header">
                                                    <h3 class="text-title">X CONVOCATORIA GENERAL DEL PROGRAMA DE MOVILIDAD EN EL POSGRADO (PMP)
                                                            DE LA RED DE MACROUNIVERSIDADES PÚBLICAS DE AMÉRICA LATINA Y EL CARIBE
                                                    </h3>
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


                                                </div>
                                            </div>

                                        </div>
                           </div>
                       <div class="col-md-6">

                       </div>
                    </div>



                     <div class="row">
                        <div class="col-md-4">
                           <div class="card text-left">
                               <div class="card-header">
                                   <h4 class="card-title">La UNNE amplía su presencia a escala continental con nuevas movilidades en 2019</h4>
                               </div>
                             <div class="card-body">

                               <p class="card-text">

                            <img src="{{asset('img/1.jpg')}}" class="img-thumbnail">
                            <p class="text-justify">
                                A través de la Secretaría General de Relaciones Interinstitucionales, dirigida por el arq. Gustavo Tripaldi, se gestionan proyectos y convenios con universidades de todo el mundo, que año a año ofrecen a estudiantes, docentes y gestores de la UNNE la oportunidad de realizar experiencias de intercambio académico y de gestión institucional, que van desde períodos de dos (2) semanas –docentes y gestores-, hasta un semestre completo para los estudiantes de grado y posgrado.
                            </p>
                               </p>
                             </div>
                           </div>
                        </div>
                         <div class="col-md-4">
                                        <div class="card text-left">
                                            <div class="card-header">
                                                <h4 class="text-title">Químico de Dinamarca dictó cursos de Posgrado en Ciencias Exactas</h4>
                                            </div>
                                            <div class="card-body">

                                                <p class="card-text">
                                                <img src="{{asset('img/2.jpg')}}" class="img-thumbnail">
                                                <p class="text-justify">El doctor en Física de la Facultad de Ciencias Exactas de la UNNE, Patricio Provasi, organizó cursos de posgrado sobre Fundamentos del Modelado Molecular e Introducción al Modelado Molecular. Los mismos contaron como profesor dictante al doctor en Química Stephan Sauer de la Universidad de Copenague, Dinamarca.</p>
                                            </div>
                                        </div>
                           </div>
                           <div class="col-md-4">
                                        <div class="card text-left">
                                            <div class="card-header">
                                                <h4 class="text-title">Se formalizó la doble titulación para la Carrera de Posgrado Maestría en Ciencias de la Ingeniería entre la UNNE y la UFRGS</h4>
                                            </div>
                                            <div class="card-body">

                                                <p class="card-text">
                                                <img src="{{asset('img/3.jpg')}}" class="img-thumbnail">
                             <p class="text-justify">Autoridades de la Facultad de Ingeniería de la UNNE mantuvieron una reunión con sus pares de la Escola de Engenharia da UFRGS –Brasil-, con el objetivo de avanzar en cuestiones procedimentales del acuerdo de Doble Titulación para la Carrera de Posgrado Maestría en Ciencias de la Ingeniería de esta casa de estudios.</p>
                                            </div>
                                        </div>
                           </div>

                    </div>
                </div>
            </div>{{-- end card --}}


    </div>{{-- end col --}}
</div>
{{-- end row --}}
</div>
{{-- end container --}}
@endsection
