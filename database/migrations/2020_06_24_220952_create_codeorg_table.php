<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCodeorgTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('codeorg', function (Blueprint $table) {
            $table->integer('leccion');
            $table->unsignedBigInteger('id_registro');
            $table->timestamps();

            $table->foreign('id_registro')->references('id')->on('registro');
            
            $table->primary(['leccion', 'id_registro']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('codeorg');
    }
}
