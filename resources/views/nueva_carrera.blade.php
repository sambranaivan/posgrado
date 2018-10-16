@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
<div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-12"><h2>Nueva Carrera</h2></div>
                    </div>
                </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Nro</th>
                                    <th>Nombre</th>
                                    <th>Denominación</th>
                                    <th>Res.Cs</th>
                                    <th>Res. Coneau</th>
                                    <th>Res. ME</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
            </div>{{-- end card --}}


    </div>{{-- end col --}}
</div>
{{-- end row --}}
</div>
{{-- end container --}}
@endsection
