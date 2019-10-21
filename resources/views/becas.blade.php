@extends('layouts.app')

@section('content')
<div class="container-fluid">

        <div class="row">
                <div class="col-md-12 text-center text-info">
                <h1 class="text-center text-white" style="background-image:url({{asset('img/carreras/fondo.png')}});background-size:cover; ">Becas y Subsidios</h1>
                </div>
                <div class="col-md-8 offset-md-2">

                        <div class="card text-center">
                            <div class="card-header">
                                 <h4 class="card-title">CONVOCATORIA DE MOVILIDAD INTERNACIONAL 2019/2020</h4>
                            </div>
                            <div class="card-body">
                                <p>para que estudiantes a nivel licenciatura y posgrado participen en un Intercambio Académico en la Universidad del Valle de Atemajac (UNIVA), durante el siguiente periodo académico de primavera 2020.</p>
                                <p class="card-text text-center">
                                        <img class="img-fluid" src="{{asset('img/univa.png')}}" alt="">

                                </p>
                            <a href="{{asset('univa.pdf')}}" taget="_blank" class="btn btn-success">Descargar</a>

                            </div>
                        </div>


                </div>

                <div class="col-md-8 offset-md-2">
                <div class="paragraph">
<div style="background-color: #e5eef2; padding: 20px 10px 15px 10px;"><img src="https://auip.org/images/stories/DATOS/BANNERS/banner_institu_asociadas.jpg" alt="Becas de Movilidad entre Instituciones Asociadas" style="margin-right: 15px; float: left;" width="250">
<div>
<p><span class="h2">Programa de Becas de Movilidad Académica entre Instituciones Asociadas a la AUIP 2019</span></p>
<p><strong>Plazo de solicitud:</strong> <br><strong>Primer plazo:</strong> Para viajes y estancias que se inicien entre <strong>julio y diciembre de 2019</strong>, la convocatoria se cierra el <strong>22 de marzo de 2019 a las 23:59 horas (GMT/UTC+01:00) Madrid.</strong> -&gt; <a href="https://auip.org/es/becas-auip/1790" target="_blank" class="links" rel="noopener noreferrer"><strong>RESOLUCIÓN</strong> </a><br><strong>Segundo plazo:</strong> Para viajes y estancias que se inicien entre <strong>enero y junio de 2020</strong>, la convocatoria se cierra el <strong>31 de octubre de 2019 a las 23:59 horas (GMT/UTC+01:00) Madrid</strong>. <strong><em>(NOTA: No se admitirán solicitudes de beca, para este plazo, antes del 23 de marzo de 2019).</em></strong></p>
<p><strong>Cuantía de las Becas:</strong> Las ayudas cubren única y exclusivamente el desplazamiento internacional hasta una cuantía máxima de 1.200 euros. Será la AUIP quien, a través de su agente de viajes, facilitará al becario el billete de avión. Para viajes entre España y Portugal, la cuantía de la ayuda será de un máximo de 800 euros y será necesario presentar justificantes o comprobantes de los gastos.</p>
<p><strong>Dirigido a:</strong> Profesores e investigadores, Gestores de programas de postgrado y doctorado, Estudiantes de postgrado y doctorado.</p>
<p style="text-align: center;"><a href="https://auip.org/images/stories/DATOS/PDF/2019/Becas_AUIP/bases_movilidad_general2019Ap.pdf" target="_blank" class="button subbutton4 btn btn-primary" rel="noopener noreferrer">Bases del programa</a><a href="http://solicitudes.auip.org" target="_blank" class="button subbutton4 btn btn-primary" rel="noopener noreferrer">Registro de solicitudes</a></p>
</div>
</div>
</div>
                </div>

        </div>

</div>
{{-- end container --}}
@endsection
