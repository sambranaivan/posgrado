@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-10"><h2>Ofertas de Posgrado</h2></div>
                        <div class="col-md-2">
                            <a href="ofertas/add">

                                <button class="btn btn-success  btn-block">
                                    Nueva Oferta
                                </button>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    {{-- ////listar ofertas publicadas --}}
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nro. Oferta</th>
                                <th>Carrera</th>
                                <th>Inicio de Oferta</th>
                                <th>Expiración Oferta</th>
                                <th>Inicio de Inscipción</th>
                                <th>Fin de Inscripción</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>



                    </table>

                </div>

        </div>
        {{-- //end card --}}
    </div>
    {{-- //end col --}}
</div>
{{-- // end row --}}
</div>
{{-- // en container --}}
@endsection
