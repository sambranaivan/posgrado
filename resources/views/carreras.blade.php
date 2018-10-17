@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
<div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h2 class="text-center">Ofertas de Posgrado</h2>
                </div>
                    <div class="card-body">
                        <div class="list-group">
                            <a href="carreras/doctorado" class="list-group-item list-group-item-action text-center">Doctorados</a>
                            <a href="carreras/maestria" class="list-group-item list-group-item-action text-center">Maestrías</a>
                            <a href="carreras/especializacion" class="list-group-item list-group-item-action text-center">Especializaciónes</a>
                        </div>
                    </div>
            </div>{{-- end card --}}


    </div>{{-- end col --}}
</div>
{{-- end row --}}
</div>
{{-- end container --}}
@endsection
