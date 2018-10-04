<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOfertasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ofertas', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('carrera_id');
            //relacion con ofertas carrera
            $table->foreign('carrera_id')->references('id')->on('carreras')->onDelete('cascade');
            $table->date('inicio_inscripcion')->nullable();
            $table->date('fin_inscripcion')->nullable();
            $table->date('inicio_oferta')->nullable();//delay for publish
            $table->date('expiracion_oferta')->nullable();//expiracion del oferta no se muestra en la web
            $table->string('enlace')->nullable();//expiracion del oferta no se muestra en la web
            $table->string('descripcion');
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
        Schema::dropIfExists('ofertas');
    }
}
