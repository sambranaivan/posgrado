@extends('layouts.app')

@section('content')
<style>
    
</style>
<div class="container">

    <div class="row">
        <div class="col-12 text-center text-info">
            <h1 class="text-center text-white" style="background-image:url({{asset('img/carreras/fondo.png')}});background-size:cover; ">eMOVIES</h2>
            
        </div>
    </div>
    
    <div class="row row-content-justify">
        
        <div class="col-10 offset-1 text-center">
            <h2 class="text-info text-center">ESPACIO DE MOVILIDAD VIRTUAL EN EDUCACIÓN SUPERIOR </br>eMOVIES (Periodo 2020 - II)</h2>
            <img class="img mx-auto" style="width: 280px"  src="{{asset('img/emovies_logo.jpg')}}" alt="">
            <hr>
       <div class="text-justify">
        <p>
            <b>Junto con la OUI, la UNNE desarrolla ofertas de grado y posgrado en otras universidades
de América en modalidad virtual con el apoyo de las TIC</b></p>
<p>El Espacio de Movilidad Virtual en la Educación Superior (eMOVIES) es una iniciativa liderada
por la Organización Universitaria Interamericana (OUI), que ofrece a las instituciones de
educación superior (IES) participantes una visión alternativa a los modelos de movilidad
tradicional para la promoción del intercambio académico en educación superior permitiendo a
los y las estudiantes, la oportunidad de cursar materias en  modalidad virtual o a distancia
ofrecidas por otras instituciones miembro de la OUI.</p>
<p>Con la rectora Delfina Veiravé como Vicepresidenta de la región Cono Sur, la Universidad
Nacional del Nordeste participa y gestiona a través de la Secretaría de Relaciones
Interinstitucionales y la red de responsables de Cooperación Internacional del catálogo de
cursos que se ofrecerán a partir del segundo semestre del 2020 y del 2021.</p>
<p>Los estudiantes de posgrado interesados en esta oportunidad, tienen a disposición la siguiente
información:</p>
<p>   <ol>
<li><a target="_blank" href="{{asset('protocolo_emovies_esp_2020.pdf')}}">Protocolo de Participación >></a></li>
                <li><a  target="_blank" href="https://docs.google.com/spreadsheets/d/1607jNs0w7-ASRkSC_k53YVpmUa_ozu3ccg27bgEsnMQ/edit#gid=1447102851">Catálogo de ofertas para el 2do. Semestre 2020 >></a></li>
<li><a href="{{asset('2-Formulario_de_solicitud_del_interesado_en_la_movilidad.docx')}}" target="_blank">Formulario de postulación >></a></li>
<li><a href="{{asset('1-Reglamento operativo interno e funcionamiento del programa emovies.docx')}}" target="_blank">Reglamento interno de la UNNE >></a></li>
        </ol>
        </p>
       </div>
        </div>
    </div>
{{-- end row --}}
</div>
{{-- end container --}}
@endsection
