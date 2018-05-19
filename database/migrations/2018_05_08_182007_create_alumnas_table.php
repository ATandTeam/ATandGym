<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumnasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnas', function (Blueprint $table) {
            $table->increments('id');
            $table->string("nombre",50);
            $table->string("aPaterno",50);
            $table->string("aMaterno",50)->nullable();
            $table->string("direccion",150);
            $table->char("telefono",10);
            $table->date("fechaNacimiento");
            $table->string("colonia",50);
            $table->string("ciudad",50);
            $table->string("estado",50);
            $table->string("profesion",150)->nullable();
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
        Schema::dropIfExists('alumnas');
    }
}
