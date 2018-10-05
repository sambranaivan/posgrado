@extends('layouts.app') @section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col col-md-12 text-center">
                            <h2>Nueva Oferta de Posgrado</h2>
                        </div>
                    </div>

                </div>
                <div class="card-body">
                    <form>
                        {{-- Seccion Carrera --}}
                        <div class="row">
                            <div class="col col-md-4">
                                <div class="form-group">

                                    <label class="control-label" for="carrera">Carrera</label>
                                    <input type="text" name="carrera" placeholder="Carrera" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="text-muted">Fill with carrera info</div>
                            </div>
                        </div> {{-- Fin Seccion Carrera --}} {{-- Seccion Fechas de Publicación --}}
                        <div class="row">

                            <div class="col col-md-4">
                                <div class="form-group">

                                    <label class="control-label" for="inicio_oferta">Inicio Oferta</label>
                                    <input class="form-control" type="date" name="inicio_oferta" id="frm_inicio_oferta">
                                </div>

                            </div>
                            <div class="col col-md-4">
                                <div class="form-group">

                                    <label class="control-label" for="fin_oferta">Expiración Oferta</label>
                                    <input class="form-control" type="date" name="fin_oferta" id="frm_fin_oferta">
                                </div>
                            </div>
                        </div>

                        {{-- Sección Fechas de Inscripcion --}}
                        <div class="row">


                            <div class="col col-md-4">
                                <div class="form-group">

                                    <label class="control-label" for="inicio_inscripcion">Inicio de Inscripción</label>
                                    <input class="form-control" type="date" name="inicio_inscripcion" id="frm_inicio_inscripcion">
                                </div>
                            </div>
                            <div class="col col-md-4">
                                <div class="form-group">

                                    <label class="control-label" for="fin_inscripcion">Fin de Inscripción</label>
                                    <input class="form-control" type="date" name="fin_inscripcion" id="frm_fin_inscripcion">
                                </div>
                            </div>

                        </div> {{-- Sección Oferta --}}
                        <div class="row">


                            <div class="col col-md-4">
                                <div class="form-group">

                                    <label class="control-label" for="enlace">Enlace de Inscripción</label>
                                    <input class="form-control" type="text" name="enlace" id="frm_enlace">
                                </div>
                            </div>
                            <div class="col col-md-8">
                                <div class="form-group">

                                    <label class="control-label" for="info">Información Complementaria</label>
                                    <input class="form-control" type="text" name="info" id="frm_info">
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col col-md-2 col-md-offset-5">
                                <button class="btn btn-block btn-primary">
                                    Publicar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>{{-- end card --}}


        </div>{{-- end col --}}
    </div>
    {{-- end row --}}
</div>
{{-- end container --}} @endsection
