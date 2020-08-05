<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFamaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fama', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->string('grado');
            $table->unsignedBigInteger('id_escuela')->nullable();
            $table->string('escuela');
            $table->integer('anio');
            $table->string('medalla');
            $table->string('categoria');
            $table->timestamps();

            $table->foreign('id_escuela')->references('id')->on('escuela')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fama');
    }
}
