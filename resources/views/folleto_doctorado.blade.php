<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <title>Laravel y data en PDF | Rimorsoft Online</title>

    </head>
    <style>
       html {
margin: 0;
}
body {
font-family: "Times New Roman", serif;
margin: 45mm 8mm 2mm 8mm;

}


    </style>
    <header>
    <h2 class="text-center">Ofertas de Doctorado</h2>
    </header>
    <body>
        <div class="container">

            <div class="row">

                        {{--  <div class="list-group">
                                <div class="list-group">
                                    @foreach ($carreras as $item)
                                    <a class="list-group-item list-group-item-action btn-sm carrera">{{$item->nombre}}</a>
                                    @endforeach

                                </div>
                        </div>  --}}
                        @foreach ($carreras as $item)
                        <div class="col-xs-6">
                             <h3>{{$item->nombre}}</h3>
                        </div>
                        @endforeach


            </div>
        </div>
    </body>
</html>
