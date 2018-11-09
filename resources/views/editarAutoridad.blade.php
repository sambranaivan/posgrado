@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
<div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-12"><h2 class="text-center">Editar Autoridad</h2></div>
                    </div>

                   <form method="POST"  action="/updateAutoridad">
                        @csrf
                        <input type="hidden" name="id" value="{{$autoridad->id}}" >
                        <div class="form-group">
                        <label for="cargo">Cargo</label>
                        <input type="text" name="cargo" value="{{$autoridad->cargo}}" id="" class="form-control" placeholder="Cargo" aria-describedby="helpId" required>
                        </div>
                        <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre" value="{{$autoridad->nombre}}" id="" class="form-control" placeholder="Nombre" aria-describedby="helpId" required>
                        </div>
                        <div class="form-group">
                        <label for="email">Direccion de Correo Electrónico</label>
                        <input type="email" name="email" value="{{$autoridad->email}}" id="" class="form-control" placeholder="Email" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                        <label for="contacto">Teléfono de contacto</label>
                        <input type="text" name="contacto" value="{{$autoridad->contacto}}" id="" class="form-control" placeholder="Contacto" aria-describedby="helpId">
                        </div>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </form>
                </div>
            </div>{{-- end card --}}


    </div>{{-- end col --}}
</div>
{{-- end row --}}
</div>
{{-- end container --}}
@endsection
