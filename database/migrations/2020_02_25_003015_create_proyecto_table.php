<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProyectoTable extends Migration{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('proyecto', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titulo');
            $table->date('fecha');
            $table->text('texto');
            $table->string('link1')->nullable();
            $table->string('link2')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        Schema::dropIfExists('proyecto');
    }
}
