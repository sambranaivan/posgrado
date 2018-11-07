<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResolucionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resolucions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigo');//en 4 cifras luego se le da formato

            $table->integer('tipo');//1 = cs, 2= cn,3 = me
            $table->string('descripcion')->nullable();
            $table->string('url')->nullable();
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
        Schema::dropIfExists('resolucions');
    }
}
