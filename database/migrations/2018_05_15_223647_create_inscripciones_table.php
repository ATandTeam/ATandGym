<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInscripcionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscripciones', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('alumna_id')->unique();
            $table->unsignedInteger('grupo_id')->unique();
            $table->date('fecha');
            $table->string('status');
            $table->timestamps();

            $table->foreign('alumna_id')
                ->references('alumna_id')
                ->on('antecedentes')
                ->onDelete('cascade');

            $table->foreign('grupo_id')
                ->references('id')
                ->on('grupos')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inscripciones');
    }
}