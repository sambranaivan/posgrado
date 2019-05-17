@extends('layouts.app')

@section('content')
<div class="container-fluid">

        <div class="row">
                <div class="col-md-12 text-center text-info">
                <h1 class="text-center text-white" style="background-image:url({{asset('img/carreras/fondo.png')}});background-size:cover; ">Becas y Subsidios</h1>
                </div>
                <div class="col-md-8 offset-md-2">
                    {{--  --}}

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

                                                           <a target="_blank" href="{{asset('pdf/procedimiento_de_postulacion_para_estudiantes.pdf')}}" class="btn btn-block btn-sm btn-primary">
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

                                                            <a target="_blank" href="{{asset('pdf/PROTOCOLO_PARA_POSTULACIONES_EN_LA_UNNE.docx')}}" class="btn btn-block btn-sm btn-danger">
                                                           Protocolo para postularse en la UNNE
                                                           <i class="fas fa-file-word"></i>
                                                           </a>
                                                    {{-- </div> --}}
                                                </div>


                                                </div>
                                            </div>










                    {{--  --}}
                </div>
        </div>


</div>
{{-- end container --}}
@endsection
