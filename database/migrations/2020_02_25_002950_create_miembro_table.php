<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMiembroTable extends Migration{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('miembro', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->string('puesto');
            $table->string('link_facebook')->nullable();
            $table->string('link_twitter')->nullable();
            $table->string('link_linkedin')->nullable();
            $table->string('correo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        Schema::dropIfExists('miembro');
    }
}
