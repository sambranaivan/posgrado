
@extends('layouts.app')

@section('content')
<div class="container-fluid">

    <div class="row">
        <div class="col-md-12 text-center text-info">
            <h1 class="text-center text-white" style="background-image:url({{asset('img/carreras/fondo.png')}});background-size:cover; ">Adiconal por Título</h1>
        </div>
        <div class="col-md-8 offset-md-2 text-center">
            <div class="card">
                <div class="card-body text-justify">
                    <p>
                        La Universidad Nacional del Nordeste otorga al personal docente y no docente, un ADICIONAL REMUNERATIVO por título de posgrado. Para los docentes rigen las pautas establecidas en la Res. 748/12 CS para Títulos de Doctor y en la Res. 795/17 CS para Especialización y Maestría. Para los No docentes el decreto 366/06 de homologación del Convenio Colectivo de Trabajo para el Sector No Docente de las Instituciones Universitarias Nacionales.
                    </p>
                    <p>
                        <ul>
                        <li>Res. 748/12 CS Adicional título de doctor/a. <a target="_blank" href="{{asset('doc/2012-0748-Adicional Doctores.pdf')}}">(link)</a></li>
                        <li>Res. 795/17 CS Adicional magister o especialista. <a target="_blank" href="{{asset('doc/2017-0795- Adicionalespecialistamagister-egf.pdf')}}">(link)</a></li>
                        <li>Dec. 366/06 Adicional No docentes. <a target="_blank" href="{{asset('doc/2006-0366 decreto_convenio colectivo de trabajo.pdf')}}">(link)</a></li>

                        </ul>
                    </p>
                    <p>
                      <ul>
                        <li>Modelo de nota para solicitud de adicional para docentes. <a target="_blank" href="#">(link)</a></li>

                        <li>Modelo de notas para solicitud de adicional para no docentes. <a target="_blank" href="#">(link)</a></li>
                      </ul>
                    </p>
                </div>
            </div>
           
        </div>
    </div>
</div>

@endsection

