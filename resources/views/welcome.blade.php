@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
<div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-12"><h2>Noticias</h2></div>
                    </div>
                </div>
                <div class="card-body">
                     <div class="row">
                        <div class="col-md-4">
                            <h4>La UNNE amplía su presencia a escala continental con nuevas movilidades en 2019</h4>
                            <img src="{{asset('img/1.jpg')}}" class="img-thumbnail">
                            <p>
                                A través de la Secretaría General de Relaciones Interinstitucionales, dirigida por el arq. Gustavo Tripaldi, se gestionan proyectos y convenios con universidades de todo el mundo, que año a año ofrecen a estudiantes, docentes y gestores de la UNNE la oportunidad de realizar experiencias de intercambio académico y de gestión institucional, que van desde períodos de dos (2) semanas –docentes y gestores-, hasta un semestre completo para los estudiantes de grado y posgrado.
                            </p>
                        </div>
                         <div class="col-md-4">
                             <h4>Químico de Dinamarca dictó cursos de Posgrado en Ciencias Exactas</h4>
                             <img src="{{asset('img/2.jpg')}}" class="img-thumbnail">
                             <p>El doctor en Física de la Facultad de Ciencias Exactas de la UNNE, Patricio Provasi, organizó cursos de posgrado sobre Fundamentos del Modelado Molecular e Introducción al Modelado Molecular. Los mismos contaron como profesor dictante al doctor en Química Stephan Sauer de la Universidad de Copenague, Dinamarca.</p>
                        </div>
                        <div class="col-md-4">
                             <h4>El decano de la Facultad de Ingeniería de la UNNE será el nuevo presidente del CONFEDI en 2019</h4>
                             <img src="{{asset('img/3.jpg')}}" class="img-thumbnail">
                             <p>El marco de la 64° asamblea plenaria del Consejo Federal de Decanos de Ingeniería, CONFEDI, el Decano de la Facultad de Ingeniería de la UNNE, Ing. Mec. José Basterra, fue electo como Secretario General de esa institución que agrupa a más de cien facultades de todo el país, y además se dejó sentado que será Presidente de la misma para el período 2019-2020.</p>
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
