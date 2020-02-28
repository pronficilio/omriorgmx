<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventoTable extends Migration{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('evento', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titulo');
            $table->date('fecha');
            $table->text('texto');
            $table->string('link')->nullable();
            $table->string('detalle_titulo');
            $table->text('detalle_texto');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        Schema::dropIfExists('evento');
    }
}
