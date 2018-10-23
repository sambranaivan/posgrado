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

                    @auth

                    <div class="row">
                            <div class="col col-md-3 col-md-offset-1">
                                <a href="/admin/ofertas">

                                    <button type="button" class="btn btn-primary btn-block">Ofertas</button>
                                </a>
                            </div>
                            <div class="col col-md-3 col-md-offset-1">
                                              <a href="/admin/carreras">
                                <button type="button" class="btn btn-primary btn-block">Carreras</button>
                                              </a>
                            </div>
                            <div class="col col-md-3 col-md-offset-1">
                                <button type="button" class="btn btn-primary btn-block">Resoluciones</button>
                            </div>
                            <div class="col col-md-3 col-md-offset-1">
                                <button type="button" class="btn btn-primary btn-block">Autoridades</button>
                            </div>
                    </div>

                    <div class="row">
                            <div class="col col-md-3 col-md-offset-1">
                                <button type="button" class="btn btn-primary btn-block">Unidades Académicas</button>
                            </div>
                            <div class="col col-md-3 col-md-offset-1">
                                <button type="button" class="btn btn-primary btn-block">Imprimir Catálogo</button>
                            </div>

                    </div>
                    @endauth

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
