<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAutoridadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('autoridads', function (Blueprint $table) {
            $table->increments('id');

            $table->string('nombre');
            $table->string('contacto')->nullable();
            $table->string('email')->nullable();
            // refactor from designacion
            $table->unsignedInteger('carrera_id');
            //relacion con carrera
            $table->foreign('carrera_id')->references('id')->on('carreras')->onDelete('cascade');

            $table->string('cargo');
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
        Schema::dropIfExists('autoridads');
    }
}
