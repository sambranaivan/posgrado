@extends('layouts.app')

@section('content')
<div class="container-fluid">

    <div class="row">
        <div class="col-md-12 text-center text-info">
            <h1 class="text-center text-white" style="background-image:url({{asset('img/carreras/fondo.png')}});background-size:cover; ">Becas y Subsidios</h1>
        </div>
         <div class="col-md-8 offset-md-2">

          <div class="card">
              <div class="card-body">
<h3 class="text-center">Becas para realizar Estudios de Máster Universitario en la Universidad Carlos III 2019</h3>
<ul class="list-group">

    {{-- <li class="list-group-item">Item</li> --}}
    <li><p><strong>Plazo de solicitud:</strong> desde el 6 de marzo hasta el 10 de abril de 2019 (ambos incluidos).</p></li>

    <li><p><strong>Nº de Plazas convocadas:</strong> 12.</p></li>



    <li><strong>Cuantía de las Becas:</strong></li>
</ul>
<div class="row">
    <div class="col-md-10  offset-md-1">
        <ul class="list-group">
<li><p>
    El importe de la matrícula de los créditos ECTS de las asignaturas que el estudiante matricula por primera vez, con un máximo de 60 ECTS. La ayuda no incluye seguros, cargos ni otras tasas asociadas a la matrícula. En el caso de másteres de 90 o 120 créditos ECTS, la ayuda de la matrícula también incluye los créditos que el estudiante matricule por primera vez en el segundo curso, con la limitación de 30 o 60 créditos como máximo, respectivamente.
</p></li>
<li><p>
Una bolsa o ayuda de estudios de 1.500 €.
</p></li>
<ul class="list-group">
    </div>
    <div>
Dirigido a: titulados universitarios no españoles egresados de universidades latinoamericanas asociadas a la AUIP.

Más información: <a href="http://auip.org/es/becas-auip/1732">http://auip.org/es/becas-auip/1732</a>
</p>
</div> </div>
                  </li>

              </ul>
          </div>


        </div>
    </div>
    {{--  ///items  --}}

</div>
{{-- end container --}}
@endsection
