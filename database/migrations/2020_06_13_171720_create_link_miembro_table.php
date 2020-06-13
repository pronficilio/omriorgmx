<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLinkMiembroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('link_miembro', function (Blueprint $table) {
            $table->unsignedBigInteger('id_pagina');
            $table->unsignedBigInteger('id_miembro');
            $table->timestamps();

            $table->foreign('id_pagina')->references('id')->on('pagina')->onUpdate('cascade');

            $table->foreign('id_miembro')->references('id')->on('miembro')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('link_miembro');
    }
}
