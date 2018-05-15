<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAntecedentesAlumnasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('antecedentes_alumnas', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('antecedente_id');
            $table->unsignedInteger('alumna_id');

            $table->foreign('antecedente_id')
                ->references('id')
                ->on('antecedentes')
                ->onDelete('cascade');

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
        Schema::dropIfExists('antecedentes_alumnas');
    }
}
