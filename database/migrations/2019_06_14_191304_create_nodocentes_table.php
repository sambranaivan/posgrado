<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNodocentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nodocentes', function (Blueprint $table) {
            $table->increments('id');

            // $table->timestamps();
            //
            $table->string("nombre");
            $table->string("apellido");
            $table->string("cuil");
            $table->date("nacimiento");
            $table->string("email");
            $table->string("telefono");
            $table->string("domicilio");
            $table->string("ciudad");
            $table->string("unidad");
            $table->string("cargo");
            $table->string("actividad");
            $table->string("resolucion");
            $table->date("fecha_cargo");
            $table->string("file_cuil");
            $table->string("file_resolucion");
            $table->string("intitucion");
            $table->string("carrera");
            $table->string("duracion");
            $table->string("titulo");
            $table->string("carrera_inicio");
            $table->float("carrera_costo");
            $table->float("aranceles_1");
            // $table->float("aranceles_2");
            // $table->float("aranceles_3");
            // $table->float("aranceles_4");
            // $table->string("file_aranceles");
            // $table->string("file_posgrado");
            // $table->string("file_cuenta");
            $table->string("file_cv");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nodocentes');
    }
}
