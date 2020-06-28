<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLinkSponsorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('link_sponsor', function (Blueprint $table) {
            $table->unsignedBigInteger('id_pagina');
            $table->unsignedBigInteger('id_sponsor');
            $table->timestamps();

            $table->foreign('id_pagina')->references('id')->on('pagina')->onUpdate('cascade')->onDelete('cascade');

            $table->foreign('id_sponsor')->references('id')->on('sponsor')->onUpdate('cascade');

            $table->primary(['id_pagina', 'id_sponsor']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('link_sponsor');
    }
}
