<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registro', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->string('apellido');
            $table->integer('edad');
            $table->string('email');
            $table->string('telefono')->nullable();
            $table->unsignedBigInteger('id_escuela');
            $table->string('grado');
            $table->string('tutor')->nullable();
            $table->string('email_tutor')->nullable();
            $table->unsignedBigInteger('id_municipio');
            $table->string('enterado')->nullable();
            $table->string('anio')->default("2020");
            $table->timestamps();

            $table->foreign('id_escuela')->references('id')->on('escuela')->onUpdate('cascade')->onDelete('cascade');

            $table->foreign('id_municipio')->references('id')->on('municipio')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registro');
    }
}
