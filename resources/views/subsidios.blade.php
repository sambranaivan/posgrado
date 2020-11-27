@extends('layouts.app')

@section('content')
<div class="container-fluid">

        <div class="row">
                <div class="col-md-12 text-center text-info">
                <h1 class="text-center text-white" style="background-image:url({{asset('img/carreras/fondo.png')}});background-size:cover; ">SUBSIDIOS</h1>
                </div>
                <div class="col-md-8 offset-md-2">

                        <div class="card">
                               
                                <div class="card-body text-justify">
                                       <p ><h4> La Universidad Nacional del Nordeste otorga subsidios para la realización de estudios de posgrado en carreras acreditadas en la Universidad Nacional del Nordeste o en otras Universidades Nacionales del país</h4></p>
                                       
<p>Destinatarios: Docentes, Becarios y Agentes No Docentes de la UNNE</p>
<h5>Normativa vigente:</h5>
        <ul>
        <li>	Reglamento de Subsidios para Docentes y Becarios: <a target="_blank" href="{{asset('doc/2019-300-Reglamento Subsidios Docentes y Becarios.pdf')}}">Res. 300/19 CS</a></li>
        <li>	Reglamento de Subsidios para No Docentes: <a target="_blank" href="{{asset('doc/2016-369-Reglamento Subsidio No docente.pdf')}}"> Res. 369/16 CS</a></li>
                <li>	Subsidio adicional Reintegro de gastos de traslado y viáticos dentro del país: <a target="_blank" href="{{asset('doc/2019-441-Reintegro Gastos de Pasajes y Viaticos.pdf')}}">Res. 441/19 CS</a></li>
                <li>	Subsidio adicional Reintegro de gastos de impresión de tesis:  <a target="_blank" href="{{asset('doc/2019-442-Reintegro Gastos de Tesis.pdf')}}">Res. 442/19 CS</a> </li>
        </ul>
       
              
              <!-- Modal -->
              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header bg-primary text-center">
                      <h3 class="modal-title" id="exampleModalLabel">Instructivo convocatoria 2020</h3>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                        <p>Si Ud. es <b>DOCENTE</b> o <b>BECARIO</b>, para conocer las condiciones del subsidio lea el Reglamento vigente aprobado por Res. 300/19 CS y 
                                las condiciones de la convocatoria actual, establecidas en el <b>punto 1</b> Convocatoria 2020 Res. 208/20 Cs</p>
                        <p>Luego, acceda al formulario del <b>punto 2</b>, en el cual se detalla al inicio toda la información que se le requerirá para la inscripción, en formato PDF.</p>
                        <p>Cumplido con el formato, acceda al <b>punto 3</b>, descargue el modelo de notas, complete los datos requeridos y envíe a la dirección de correo indicada.</p>
                        <p>&nbsp;</p>
                        <p>Si Ud. es <b>NO DOCENTE</b>, para conocer las condiciones del subsidio lea el Reglamento vigente aprobado por Res. 369/16 CS y las condiciones de la convocatoria actual, establecidas en el <b>punto 4</b> Convocatoria 2020 Res. 207/20 Cs</p>
                        <p>Luego, acceda al formulario del <b>punto 5</b>, en el cual se detalla al inicio toda la información que se le requerirá para la inscripción, en formato PDF.</p>
                        <p>Cumplido con el formato, acceda al <b>punto 6</b>, descargue el modelo de notas, complete los datos requeridos y envíe a la dirección de correo indicada.</p>
                        
                    </div>
                    <div class="modal-footer">
                      {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">Save changes</button> --}}
                    </div>
                  </div>
                </div>
              </div>
              
        <b><h4>Convocatoria 2020 
                {{-- <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#exampleModal">
                Instructivo </br>convocatoria 2020
        </button> --}}

</h4></b>
        
        <ol>
                <li>	<b>Docentes y Becarios</b>: <a target="_blank" href="{{asset('doc/2020-208-Convocatoria 2020 Subsidios Docentes.pdf')}}"> Res. 208/20 CS</a></li>
                {{-- <li>	Acceso para presentar la información requerida en la postulación: <a target="_blank" href="{{route('inscripcion')}}">Formulario de Inscripción</a></li> --}}
                <li>Resultados de la convocatoria: <a target="_blank" href="{{asset('doc/Res-295.20-Beneficiarios de subsidios 2020 - Docentes y Becarios.pdf')}}"> Res. 295/20 CS</a></li>
                 <li>Cuota 2020 de convocatorias anteriores Docentes y Becarios <a target="_blank" href="{{asset('doc/2020-236-Subsidios Docentes y Becarios Cuota 2020.pdf')}}">Res. 236/2020 CS</a></li>
                {{-- <li>    Modelo de nota solicitud Subsidios Docentes y Becarios: <a href="{{asset('doc/Solicitud de postulación a la convocatoria 2020 de subsidios para Docentes y becarios.docx')}}">Aqui</a></li> --}}
                <li>	<b>No Docentes</b>: <a target="_blank" href="{{asset('doc/2020-207-Convocatoria 2020 Subsidios No Docente.pdf')}}"> Res. 207/20 CS</a></li>
                {{-- <li>	Acceso para presentar la información requerida en la postulación: <a target="_blank" href="{{route('inscripcionNoDocente')}}">Formulario de Inscripción</a></li> --}}
                {{-- <li>Modelo de nota solicitud Subsidios No Docentes: <a href="{{asset('doc/Solicitud de postulación a la convocatoria 2020 de subsidios para No Docentes.docx')}}">Aqui</a></li> --}}
                <li>Resultados de la convocatoria: <a target="_blank" href="{{asset('doc/Res-320.20 - Beneficiarios de subsidios 2020 - No Docentes.pdf')}}"> Res. 320/20 CS</a></li>
                 <li>Cuota 2020 de convocatorias anteriores <a target="_blank" href="{{asset('doc/2020-237-Subsidios No docentes cuota 2020.pdf')}}">Res. 237/2020 CS</a></li>
        </ol>
        <hr>
<h5>Convocatoria 2019 </h5>
        <ul>
                <li>	Docentes y Becarios: <a target="_blank" href="{{asset('doc/2019-301-Convocatoria 2019 Subsidios Docentes y becarios.pdf')}}"> Res. 301/19 CS</a></li>
                <li>Resultados de la convocatoria: <a target="_blank" href="{{asset('doc/2019-495-Convocatoria 2019 Docentes y Becarios Aprobados.pdf')}}"> Res. 495/19 CS</a></li>
                <li>Cuota 2019 de convocatorias anteriores Docentes y Becarios <a target="_blank" href="{{asset('doc/Cuota 2019 - Conv 2018 2017 2016.pdf')}}">Conv. 2018-2017-2016</a></li>
                <li>	No Docentes: <a target="_blank" href="{{asset('doc/2019-382-Convocatoria 2019 Subsidios No Docentes.pdf')}}"> Res. 382/19 CS</a></li>
                <li>Resultados de la convocatoria: <a target="_blank" href="{{asset('doc/2019-640-Convocatoria 2019 No Docentes Aprobados.pdf')}}">  Res. 640/19 CS</a></li>
                <li>Cuota 2019 de convocatorias anteriores <a target="_blank" href="{{asset('doc/Cuota 2018 -ND.pdf')}}">Conv.2018-2017-2016</a></li>
                
                

        </ul>
        <hr>
<h5>Convocatoria 2018 </h5>
        <ul>
                <li>	Docentes y Becarios: <a target="_blank" href="{{asset('doc/2018-316-Convocatoria 2018 Subsidios docentes y becarios.pdf')}}"> Res. 316/18 CS</a></li>
                <li>Resultados de la convocatoria: <a target="_blank" href="{{asset('doc/Convocatoria 2018.pdf')}}">583/18 CS - 618/18 CS </a></li>
                <li>Cuota 2018 de convocatorias anteriores Docentes y Becarios <a target="_blank" href="{{asset('doc/Cuota 2018 - Conv 2017 2016 2015.pdf')}}">Conv. 2017-2016-2015</a></li>
                <li>	No Docentes: <a target="_blank" href="{{asset('doc/2018-562 subsidio no docente 2018.pdf')}}"> 562/18 CS </a></li>
                <li>Resultados de la convocatoria: <a target="_blank" href="{{asset('doc/2018-952-Convocatoria 2018 subsidios Beneficiarios No docentes.pdf')}}">  Res. 952/18 CS</a></li>
                <li>Cuota 2018 de convocatorias anteriores <a target="_blank" href="{{asset('doc/Cuota 2018 -ND.pdf')}}">Conv.2016-2017</a></li>
        </ul>

<p><h5>Para cumplimentar las condiciones establecidas en la reglamentación vigente, le solicitamos realice su presentación con los formatos que se detallan más abajo, y en el plazo correspondiente.</h5></p>

                                <h5>Rendición de subsidios: </h5>
                                        <ul><li><a target="_blank" href="{{asset('doc/Nota y Formulario de Rendicion Subsidios Docentes y No Docentes.docx')}}">Nota y Formulario de rendición</a></li></ul>
                                        <h5>Solicitud de reintegro gastos de traslado y viáticos</h5>
                                        <ul><li><a target="_blank" href="{{asset('doc/Nota y Formulario de Reintegro de Gastos de traslados y viáticos-Res. 441-2019CS.docx')}}">Nota y Formulario de presentación</a></li></ul>
                                        <h5>Solicitud de reintegro gastos de impresión de tesis</h5>
                                        <ul><li><a target="_blank" href="{{asset('doc/Nota de reintegro Gastos de tesis -Res. 442-2019CS.docx')}}">Nota y Formulario de presentación</a></li></ul>

                                        <h5>Solicitud de trámite de renuncia al subsidio otorgado</h5>
                                        <ul><li><a target="_blank" href="{{asset('doc/Nota de Renuncia a subsidio - Docentes y Becarios-No docentes.docx')}}">Nota de presentación</a></li></ul>
                                        <h5>Presentación de informe de finalización de estudio</h5>
                                        <ul><li><a target="_blank" href="{{asset('doc/Nota de informe de finalizacion de  estudios de posgrado.docx')}}">Nota de presentación</a></li></ul>

                                {{-- <hr> --}}
                                <h5>Datos de la cuenta bancaria para devolución de montos de subsidios</h5>
                                <ul><li><a target="_blank" href="{{asset('doc/CBU cuenta Patagonia para devolución de subsidios.pdf')}}">CBU cuenta Patagonia para devolución de subsidios</a></li></ul>
                                
                                </div>
                        </div>

                </div>
                       








        </div>

</div>
{{-- end container --}}
@endsection
