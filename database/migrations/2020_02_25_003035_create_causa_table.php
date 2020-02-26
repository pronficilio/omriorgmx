<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCausaTable extends Migration{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('causa', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titulo');
            $table->integer('acumulado');
            $table->integer('cant_donaciones');
            $table->integer('meta');
            //$table->string('link1')->nullable();
            //$table->string('link2')->nullable();
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
        Schema::dropIfExists('causa');
    }
}
