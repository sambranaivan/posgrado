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
                                                <h3 class="text-title">Seminario de Promoción de Posgrados argentinos en Paraguay </h3>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="card-body">

                                                        <p class="card-text">
                                                            <img src="{{asset('img/paraguay.png')}}" class="img-thumbnail">
                                                        </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="card-body">
                                                        <p class="card-text text-justify">
En conjunto  con el Ministerio de Educación y Ciencias de la República de Paraguay y la Embajada Argentina en la República de Paraguay estamos organizando un Seminario sobre Posgrados a realizarse en la Ciudad de Asunción los días 6 y 7 de mayo.</p><p class="card-text text-justify"> El Seminario contará con un espacio para reuniones bilaterales con el objetivo de fomentar la cooperación bilateral y un espacio de feria en la que las instituciones argentinas promocionarán la oferta educativa a nivel de posgrado.

Las actividades se desarrollarán en el Auditorio Leopoldo Marechal perteneciente a la Embajada Argentina en Paraguay.

</p><p class="card-text text-justify">
    A las instituciones interesadas en participar de esta actividad les solicitamos tengan a bien registrarse en el siguiente <u><a href="https://goo.gl/forms/yaj7W2UK9C1jTN3n1">formulario</a></u> antes del 10 de abril.


                                                        </p>
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
