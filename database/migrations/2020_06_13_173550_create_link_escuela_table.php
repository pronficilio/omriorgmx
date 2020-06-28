<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLinkEscuelaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('link_escuela', function (Blueprint $table) {
            $table->unsignedBigInteger('id_pagina');
            $table->unsignedBigInteger('id_escuela');
            $table->timestamps();

            $table->foreign('id_escuela')->references('id')->on('escuela')->onUpdate('cascade')->onDelete('cascade');

            $table->foreign('id_pagina')->references('id')->on('pagina')->onUpdate('cascade')->onDelete('cascade');

            $table->primary(['id_pagina', 'id_escuela']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('link_escuela');
    }
}
