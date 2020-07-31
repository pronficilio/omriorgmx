<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEscuelaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('escuela', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->string('corto')->nullable();
            $table->string('direccion')->nullable();
            $table->string('telefono')->nullable();
            $table->unsignedBigInteger('id_municipio')->nullable();
            $table->string('nivel_escolar')->nullable();
            $table->timestamps();

            $table->foreign('id_municipio')->references('id')->on('municipio')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('escuela');
    }
}
