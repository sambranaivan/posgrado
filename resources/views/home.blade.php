@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Panel de Administracion</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                    <div class="row">
                        <div class="col col-md-4">
                            <button type="button" class="btn btn-primary">Gestionar Ofertas</button>
                        </div>

                            <div class="col col-md-4">
                                <button type="button" class="btn btn-primary">Gestionar Carreras</button>
                            </div>


                            <div class="col col-md-4">
                                <button type="button" class="btn btn-primary">Gestionar Resoluciones</button>
                            </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
