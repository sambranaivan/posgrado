<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarrerasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carreras', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('anio')->nullable();
            $table->string('nombre');
            $table->string('titulo')->default('');//titulo que otorga

            // $table->unsignedInteger('consejo_id');//resolucion de consejo superior
            // $table->foreign('consejo_id')->references('id')->on('resolucions')->onDelete('cascade');
            // $table->unsignedInteger('coneau_id')->nullable();//resolucion de coneau
            // $table->foreign('coneau_id')->references('id')->on('resolucions')->onDelete('cascade');
            // $table->unsignedInteger('ministerio_id')->nullable();//resolucion de miniterio de educacion
            // $table->foreign('ministerio_id')->references('id')->on('resolucions')->onDelete('cascade');



            $table->unsignedInteger('denominacion_id');//denominacion
            $table->foreign('denominacion_id')->references('id')->on('denominacions')->onDelete('cascade');
            $table->string('descripcion')->nullable();
            $table->unsignedInteger('unidad_id');//denominacion
            $table->foreign('unidad_id')->references('id')->on('unidads')->onDelete('cascade');
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
        Schema::dropIfExists('carreras');
    }
}
