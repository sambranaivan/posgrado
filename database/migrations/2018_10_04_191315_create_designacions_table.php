<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDesignacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('designacions', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('carrera_id');
            //relacion con carrera
            $table->foreign('carrera_id')->references('id')->on('carreras')->onDelete('cascade');
            $table->unsignedInteger('autoridad_id');
            //relacion con autoridad
            $table->foreign('autoridad_id')->references('id')->on('autoridads')->onDelete('cascade');
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
        Schema::dropIfExists('designacions');
    }
}
