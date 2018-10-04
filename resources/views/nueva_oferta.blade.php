@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
<div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-12 text-center"><h2>Nueva Oferta de Posgrado</h2></div>
                    </div>
                    <div class="row">

                        <form>
                            <select name="carrera" id="frm_carrera">
                                <option value="">Doctorado en Cosas</option>
                            </select>
                            <label for="inicio_oferta">Inicio Oferta</label>
                            <input class="form-control" type="date" name="inicio_oferta" id="frm_inicio_oferta">
                            <label for="fin_oferta">Expiración Oferta</label>
                            <input class="form-control" type="date" name="fin_oferta" id="frm_fin_oferta">
                            <label for="inicio_inscripcion">Inicio de Inscripción</label>
                            <input class="form-control" type="date" name="inicio_inscripcion" id="frm_inicio_inscripcion">
                            <label for="fin_inscripcion">Fin de Inscripción</label>
                            <input class="form-control" type="date" name="fin_inscripcion" id="frm_fin_inscripcion">

                        </form>


                    </div>
                </div>
            </div>{{-- end card --}}


    </div>{{-- end col --}}
</div>
{{-- end row --}}
</div>
{{-- end container --}}
@endsection
