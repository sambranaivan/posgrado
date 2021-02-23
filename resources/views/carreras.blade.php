@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center text-white" style="background-image:url({{asset('img/carreras/fondo.png')}});background-size:cover; ">Carreras de Posgrado</h1>
    <div id="accordion">
        <div class="card">
          <div class="card-header" id="headingOne">
            <h2 class="mb-0">
              <button class="btn btn-link" data-toggle="collapse" data-target="#estandares" aria-controls="estandares" style="font-size: 1.2rem">
                1.	Estándares y ordenanzas CONEAU
              </button>
            </h2>
          </div>
      
          <div id="estandares" class="collapse " aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body">
                <div class="">

                   
                    <h2 class="titulo">Normativa</h2>
                    
                    <p><b>Resoluciones Ministeriales de estándares&nbsp;</b><b><a href="https://www.coneau.gob.ar/archivos/resoluciones/RESME160-11.pdf">N° 160/11</a>, <a href="https://www.coneau.gob.ar/archivos/resoluciones/ResME2385-15.pdf">Nº 2385/15</a>,&nbsp; <a href="https://www.coneau.gob.ar/archivos/form09posg/ResMED2641_17.pdf">Nº 2641/17</a> y <a href="https://www.coneau.gob.ar/archivos/form09posg/RM2643-19EstandaresEspecmed.pdf">Nº 2643/19</a> (<a href="https://www.coneau.gob.ar/archivos/anexos/IF-2019-68496634-APN-SECPU-MECCYT.pdf">Anexo</a>).</b></p>
                    <h3 class="titulo">Carreras en funcionamiento</h3>

<p>En cuanto a los procedimientos para la acreditación de carreras en funcionamiento deben tenerse en cuenta las Resoluciones correspondientes a las etapas de cada Convocatoria y la siguiente normativa:</p>
<p><strong>–&nbsp;<a href="https://www.coneau.gob.ar/archivos/RM51_10.pdf">Resolución Ministerial Nº 51/10. </a>&nbsp;</strong>Carreras de Grado y Posgrado. Reconocimiento Oficial y Validez Nacional.</p>
<p><strong>–&nbsp;<a href="https://www.coneau.gob.ar/archivos/ordenanzas/Orde065.pdf" target="_blank" rel="noopener noreferrer">Ordenanza CONEAU Nº 65. </a>&nbsp;</strong>Procedimientos para la acreditación de carreras de posgrado en funcionamiento.</p>
<p>– <strong><a href="https://www.coneau.gob.ar/archivos/ordenanzas/Orde070.pdf" target="_blank" rel="noopener noreferrer">Ordenanza CONEAU N° 70 </a>&nbsp;</strong>(Informes de Seguimiento – Procedimientos)&nbsp;<a href="https://www.coneau.gob.ar/archivos/resoluciones/RS-2020-50852238-APN-CONEAU-ME.pdf" target="_blank" rel="noopener noreferrer">RESFC-2020-241-APN-CONEAU#ME</a></p>
<p><strong>–&nbsp;<a href="https://www.coneau.gob.ar/archivos/ordenanzas/Orde051.pdf">Ordenanza CONEAU Nº 51.&nbsp;&nbsp;</a></strong>Plazo de acreditación de carreras de posgrado que han tenido una evaluación anterior favorable como proyecto.</p>
<p><strong>–&nbsp;<a href="http://www.coneau.gob.ar/archivos/form09posg/2017-RV-CF-Pautas-TAD.pdf" target="_blank" rel="noopener noreferrer">Pautas para la presentación de la Respuesta a la vista</a></strong></p>

                </div>
                <div class="">

                  
                  
                    <h3 class="titulo">Carreras nuevas</h3>

                    
<p>– <strong><a href="https://www.coneau.gob.ar/archivos/ordenanzas/Orde064.pdf" target="_blank" rel="noopener noreferrer">Ordenanza CONEAU Nº 64</a>.</strong> &nbsp;Procedimientos para la evaluación de&nbsp; carreras nuevas de posgrado al sólo efecto del reconocimiento oficial provisorio del título.</p>
<p><strong>&nbsp;– <a href="https://www.coneau.gob.ar/archivos/form09posg/NOTATECNICACNUEVAS.pdf" target="_blank" rel="noopener noreferrer">Nota técnica para la presentación de Carreras Nuevas</a></strong></p>
<p><strong>– <a href="https://www.coneau.gob.ar/archivos/form09posg/2017-RV-CN-Pautas-TAD.pdf" target="_blank" rel="noopener noreferrer">Pautas para la presentación de la Respuesta a la vista</a></strong></p>

                </div>


            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingTwo">
            <h2 class="mb-0">
              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#normativas" aria-expanded="false" aria-controls="normativas" style="font-size: 1.2rem">
                2.	Normativa de la universidad
              </button>
            </h2>
          </div>
          <div id="normativas" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
            <div class="card-body">
                <ol>
                <li><p><strong><a href="{{asset('doc/2015-1100-Ordenanza del sistema de posgrado de la UNNE.pdf')}}" target="_blank">Resolución 2015-1100 CS.</a></strong>&nbsp;Ordenanza del sistema de posgrado de la UNNE</p></li>
                <li><p><strong><a href="{{asset('doc/2020-296- Guia para la presentacion de carreras de posgrado.pdf')}}" target="_blank">Resolución 2020-0296 CS.</a></strong>&nbsp;Guía para la presentación de carreras de posgrado</p></li>
                <li><p><strong><a href="{{asset('doc/2018-221-Aprueba el sistema de educación a distancia de la UNNE.pdf')}}" target="_blank">Resolución 2018-0221 CS.</a></strong>&nbsp;Aprueba el sistema de educación a distancia de la UNNE</p></li>
                <li><p><strong><a href="{{asset('doc/2018-285-Lineamientos pedagógicos carreras de posgrado con modalidad a distancia.pdf')}}" target="_blank">Resolución 2018-0285 CS.</a></strong>&nbsp;Lineamientos pedagógicos carreras de posgrado con modalidad a distancia</p></li>
                <li><p><strong><a href="{{asset('doc/2008-473-Escala de calificaciones UNNE-vigente a partir del 2009.pdf')}}" target="_blank">Resolución 2008-0473 CS.</a></strong>&nbsp;Escala de calificaciones UNNE-vigente a partir del 2009</p></li>
                <li><p><strong><a href="{{asset('doc/2017-423-Guia Elaboracion de informe avance-final carreras.pdf')}}" target="_blank">Resolución 2017-0423 CS.</a></strong>&nbsp;Guia Elaboración de informe avance-final carreras</p></li>
                    <li><p><strong><a href="" target="_blank">Resolución 2016-0668 CS.</a></strong>&nbsp;Reglamento deposito RIUNNE</p></li>
                    <li><p><strong><a href="" target="_blank">Resolución 2020-155 CS.</a></strong>&nbsp;Autorizar defensa de tesis A distancia</p></li>
                    <li><p><strong><a href="" target="_blank">Resolución 2020-156 CS.</a></strong>&nbsp;Autorizar adecuación al dictado virtual de las carreras de posgrado presenciales</p></li>
                </ol>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingThree">
            <h2 class="mb-0">
              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#convocatoria" aria-expanded="false" aria-controls="convocatoria" style="font-size: 1.2rem">
                3.	Convocatoria de Carreras nuevas
              </button>
            </h2>
          </div>
          <div id="convocatoria" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
            <div class="card-body">
                <div style="font-size: 1.2em">

                    


                    <p style="text-align: justify;">Las solicitudes de&nbsp;acreditación al solo efecto del reconocimiento oficial provisorio del título de carreras nuevas se presentan ante la CONEAU en la última semana de los meses de abril y octubre de cada año.</p>
<p style="text-align: justify;">En forma previa, las instituciones&nbsp;<strong>deben formalizar</strong>&nbsp;la presentación de sus carreras nuevas.&nbsp;Esta formalización electrónica podrá realizarse hasta el día 15 de los meses de marzo o septiembre de cada año, dependiendo de la fecha de presentación abril u octubre, respectivamente.</p>
<p><span style="color: #000000;"><strong>♦&nbsp;Formalización de la carrera:&nbsp;</strong>hasta el <strong>15 de marzo de 2021</strong> a través de</span> <strong><a href="http://209.13.179.3/coneauglobal/atenea/acerca-de.aspx" target="_blank" rel="noopener noreferrer">CONEAU Global</a></strong>.&nbsp;<a href="http://www.coneau.gov.ar/archivos/AyudaFormalizaciones.pdf">Manual de ayuda para formalizar.</a></p>
<p><span style="color: #333399;"><strong>&nbsp;<span style="color: #000000;">♦ Solicitud de&nbsp;acreditación de la carrera: </span></strong><span style="color: #000000;">entre el</span><span style="color: #000000;">&nbsp;<strong>26 y el 30 de abril d</strong><strong>e 2021</strong>&nbsp;</span><span style="color: #000000;">a través de</span>&nbsp;<strong><a href="http://209.13.179.3/coneauglobal/atenea/acerca-de.aspx" target="_blank" rel="noopener noreferrer">CONEAU Global</a>.&nbsp;</strong></span></p>
<p><span style="color: #000000;"><strong>♦&nbsp;Apertura del expediente electrónico:</strong> <span style="color: #000000;">entre el<strong> entre el&nbsp;26 y el 30 de abril de 2021</strong></span>&nbsp;a través de la plataforma </span><strong><span style="color: #000000;">Trámites a Distancia</span>&nbsp;<a href="https://tramitesadistancia.gob.ar/tramitesadistancia/inicio-publico">TAD</a></strong>.&nbsp;Para obtener más información sobre este procedimiento<a href="http://www.coneau.gob.ar/CONEAU/?page_id=2691">&nbsp;<strong>click aquí</strong>.</a></p>
<p style="text-align: justify;">La información completa de los requisitos para la presentación de la carrera puede consultarla en la Nota Técnica de Carreras Nuevas:</p>
<p style="text-align: justify;"><strong>–&nbsp;<a href="http://www.coneau.gob.ar/archivos/form09posg/NOTATECNICACNUEVAS.pdf">Nota técnica (presentación de la solicitud de reconocimiento oficial provisorio del título).</a></strong></p>
</div>
            </div>
          </div>
        </div>
     
      <div class="card">
        <div class="card-header" id="headingThree">
          <h2 class="mb-0">
            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#carreras_funcionamiento" aria-expanded="false" aria-controls="carreras_funcionamiento" style="font-size: 1.2rem">
                4.	Convocatoria de Carreras en Funcionamiento
            </button>
          </h2>
        </div>
        <div id="carreras_funcionamiento" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
          <div class="card-body">
            <p style="font-size: 1.2em" class="text-justify">
                Las carreras en funcionamiento deben presentarse a evaluación obligatoria, una vez vencido el plazo de acreditación, de acuerdo a las convocatorias que CONEAU realiza anualmente por áreas disciplinares: Ciencias Humanas, Ciencias Básicas, Ciencias de la Salud, Ciencias Sociales, Ciencias Aplicadas
            </p>
            <h2>
                <a  href="https://www.coneau.gob.ar/coneau/ciencias-basicas-2/" target="_blank">
                    Sexta Convocatoria 
                </a>
            </h2>
            <div class="clear"></div>
                    <h2 class="titulo">Ciencias Básicas</h2>

                    <p><strong><span style="color: #000000;">♦</span>&nbsp;<a href="https://www.coneau.gob.ar/archivos/form09posg/RS-2020-88507670-APN-CONEAU-ME.pdf" target="_blank" rel="noopener noreferrer">RESFC-2020-416-APN-CONEAU#MECCYT</a>&nbsp;|&nbsp;<a href="https://www.coneau.gob.ar/archivos/form09posg/IF-2020-88253952-APN-DAC-CONEAU.pdf" target="_blank" rel="noopener noreferrer">ANEXO</a></strong></p>
<p><span style="color: #000000;"><strong>La primera etapa de la sexta convocatoria corresponde a las carreras de posgrado de especialización, maestría y doctorado pertenecientes al área de Ciencias Básicas.</strong></span></p>
<p><span style="color: #000000;">♦&nbsp;<strong>Formalización: </strong>hasta el&nbsp;<strong>29 de marzo de 2021</strong>&nbsp;a través de</span>&nbsp;<a href="https://global.coneau.gob.ar/coneauglobal/" target="_blank" rel="noopener noreferrer">CONEAU Global</a></p>
<p><span style="color: #000000;"><strong>♦ Taller preparatorio: 9 de abril&nbsp; | Taller de Sistemas: 14 de abril</strong></span></p>
<p><span style="color: #000000;"><strong>♦ Modalidad a distancia</strong>. <strong>Inscripción:</strong> <strong>del 18 de febrero al 5 de marzo </strong></span><a href="https://global.coneau.gob.ar/coneauglobal/iniciar-sesion/?ir=/coneauglobal/publico/escuela-coneau/pos2021/" target="_blank" rel="noopener noreferrer">disponible desde aquí</a></p>
<label class="mx-4">Para registrar la inscripción deberá ingresar a CONEAU Global a través del usuario institucional. Al ingresar al formulario podrá conocer los cupos disponibles para cada unidad académica. <strong><em><span style="color: #12164d;">Actividades no aranceladas</span></em></strong></label>
<h6></h6>
<p><span style="color: #000000;"><strong>♦ <a href="https://global.coneau.gob.ar/coneauglobal/" >Presentación de solicitud de acreditación y autoevaluación</a> hasta el 18 de agosto de 2021</strong>&nbsp;a&nbsp;través de&nbsp;<strong><a href="https://global.coneau.gob.ar/coneauglobal/" target="_blank" rel="noopener noreferrer">CONEAU Global</a></strong></span></p>
<p><span style="color: #000000;">♦&nbsp;</span><a href="https://www.coneau.gob.ar/archivos/form09posg/CsBasicas_NOTATECNICA.pdf" target="_blank" rel="noopener noreferrer"><strong>Nota Técnica&nbsp;(Presentación de la solicitud de acreditación)</strong></a></p>
<p><span style="color: #000000;">♦</span>&nbsp;<a href="https://www.coneau.gob.ar/coneau/acreditacion-de-carreras-2/" target="_blank" rel="noopener noreferrer"><strong>Implementación de Trámites a Distancia&nbsp;(TAD)</strong></a></p>

                </div>
          </div>
        </div>
      </div>
   
    <div class="card">
        <div class="card-header" id="headingThree">
          <h2 class="mb-0">
            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#guia_de_trámites" aria-expanded="false" aria-controls="guia_de_trámites"  style="font-size: 1.2rem">
                5.	Guía de trámites de carreras de posgrado
            </button>
          </h2>
        </div>
        <div id="guia_de_trámites" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
          <div class="card-body">
              <ul style="font-size:1.2em">
                <li>5.1.	<a href="#">Formalización</a></li>
                <ul>
                <li>5.1.1.	<a href="#">Carreras nuevas</a></li>
                <li>5.1.2.	<a href="#">Carreras en funcionamiento </a></li>
                </ul>
                <li>5.2.	<a href="#">Presentación de acreditación de carreras </a></li>
                    <ul>
                <li>5.2.1.	<a href="#">Carreras nuevas</a></li>
                <li>5.2.2.	<a href="#">Carreras en funcionamiento </a></li>
                    </ul>
                <li>5.3.	<a href="#">Presentación de respuesta a la vista</a></li>
                <li>5.4.	<a href="#">Solicitud de nuevo dictado de carrera</a></li>
                <li>5.5.	<a href="#">Solicitud de modificación de plan de estudio, cuerpo docente o Reglamento de carrera</a></li>
                <li>5.6.	<a href="#">Informar cese de actividades de una carrera</a></li>
            </ul>
            
          </div>
        </div>
      </div>
    </div>
</div>
<div class="container">
<h1 class="text-center text-white" style="background-image:url({{asset('img/carreras/fondo.png')}});background-size:cover; ">Oferta de Posgrado</h1>
    <div class="row">
        <div class="col-md-4 carrera-imagen">
            <a href="carreras/doctorado">
                  <img class="img-responsive img-center" src="{{asset('img/carreras/doctorado.png')}}">
            </a>
            <a href="carreras/doctorado">
                            <h3 class="text-center">Doctorados</h3>
                        </a>
        </div>
        <div class="col-md-4 carrera-imagen">
            <a href="carreras/maestria">

                 <img class="img-responsive img-center" src="{{asset('img/carreras/maestria.png')}}">
                </a>
                         <a href="carreras/maestria">
                             <h3 class="text-center">Maestrias</h3>
                         </a>
        </div>
        <div class="col-md-4 carrera-imagen">
            <a href="carreras/especializacion">
                <img class="img-responsive img-center" src="{{asset('img/carreras/esp.png')}}">
                <a href="carreras/especializacion">
                    <h3 class="text-center">Especializaciones</h3>
                </a>
            </a>
        </div>


    </div>
</div>
{{--  end container --}}
@endsection


 {{-- <a href="carreras/doctorado" class="list-group-item list-group-item-action text-center">Doctorados</a>
                            <a href="carreras/maestria" class="list-group-item list-group-item-action text-center">Maestrías</a>
                            <a href="carreras/especializacion" class="list-group-item list-group-item-action text-center">Especializaciónes</a> --}}
