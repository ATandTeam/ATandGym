<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAntecedentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('antecedentes', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('alumna_id')->unique();
            $table->string('ejercicioAnterior', 1023);
            $table->string('porqueEjercicio', 1023);
            $table->string('tieneLesion',1023);
            $table->string('algunaDieta',1023);
            $table->string('tomaAgua',50);
            $table->string('problemas',1023);

            $table->foreign('alumna_id')
                ->references('id')
                ->on('alumnas')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('antecedentes');
    }
}
