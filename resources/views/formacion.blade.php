@extends('layouts.app')

@section('content')

<div class="container">
<h1 class="text-center text-white" style="background-image:url({{asset('img/carreras/fondo.png')}});background-size:cover; ">Formación Continua</h1>
    <div class="row">
        <div class="col-md-10 offset-md-1">
           <div class="card">
               <div class="card-body">
                <p class="text-justify">
                    La Universidad Nacional del Nordeste tiene como uno de sus objetivos impulsar el desarrollo de una oferta de formación continua amplia, flexible, innovadora y de calidad para responder a las necesidades de formación demandadas por la sociedad.
                    Las actividades de posgrado para la formación continua, organizadas por las Facultades, Institutos dependientes de Rectorado, Secretaría General Académica y Secretaría General de Posgrado, son espacios formativos que tienen como objetivo la actualización y el perfeccionamiento de graduados, con el objetivo de fortalecer y profundizar la formación a un nivel superior. 
                </p>
                   <p> En la UNNE se podrán desarrollar los siguientes tipos de actividades de posgrado para la formación continua: 
                    <ul>
                    <li>Programas de Diplomatura Superior (PDSup) </li>
                    <li>Programas de Actualización Profesional (PAProf)</li>
                    <li>Cursos, Talleres y Seminarios de Posgrado</li>
                    </ul>
                   </p>
                    <p>Normativa: 
                    </br><b><a href="{{'doc/2021-112 Procedimiento Administrativo para la Tramitacion y Otorgamiento de Certificados de Programas de Formacion Continua.pdf'}}" target="_blank">Resolución 112/21 CS</a></b>: Procedimiento Administrativo para la Tramitación y Otorgamiento del Certificado correspondiente a los Programas de Diplomatura Superior y Programas de Actualización Profesional.
                </br><b><a href="{{'doc/2021-442- Guia para la presentacion de Actividades de Formación Continua Posgrado.pdf'}}" target="_blank">Resolución 442/21 CS</a></b>: Guía para la presentación de Actividades de Posgrado para la Formación Continua.
                </br><b><a href="{{'doc/2021-091-Autoriza emision de certificados digitales.pdf'}}" target="_blank">Resolución 091/21 CS</a></b>: Autorización para la emisión de certificados digitales para las actividades académicas de formación continua de posgrado (cursos, programas de diplomaturas y de actualización profesional, Fellowship, entre otras), que incluirán las firmas digitales de las autoridades de la Universidad que avalan la certificación (Rectora, Decanos/as, Secretarios/as de Posgrado)  
                </p>
               </div>
           </div>
        </div>
    </div>
    <h1 class="text-center text-white" style="background-image:url({{asset('img/carreras/fondo.png')}});background-size:cover; ">Oferta de Formación Continua</h1>
    <div class="row">

        <div class="col-md-6 carrera-image text-center img-center">
            <a href="carreras/diplomatura">

                 <img class="img-responsive img-center" src="{{asset('img/carreras/diplomatura.png')}}">
                </a>
                         <a href="carreras/diplomatura">
                             <h3 class="text-center">Diplomatura Superior</h3>
                         </a>
        </div>
        <div class="col-md-6 carrera-imagen text-center img-center text-muted">

                    <a href="carreras/cursos">
<img class="img-responsive img-center" src="{{asset('img/carreras/cursos.png')}}">

                    <h3 class="text-center">Cursos de Posgrado</h3>
                    </a>



        </div>


    </div>
</div>
{{--  end container --}}
@endsection


 {{-- <a href="carreras/doctorado" class="list-group-item list-group-item-action text-center">Doctorados</a>
                            <a href="carreras/maestria" class="list-group-item list-group-item-action text-center">Maestrías</a>
                            <a href="carreras/especializacion" class="list-group-item list-group-item-action text-center">Especializaciónes</a> --}}
