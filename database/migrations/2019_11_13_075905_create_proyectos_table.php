<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProyectosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyectos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('encargado_id');
            $table->string('nombre',100);
            $table->string('titulo');
            $table->date('fechainicio');
            $table->date('fechafin');
            $table->integer('horasestimadas');
            $table->timestamps();

            $table->foreign('encargado_id')->references('id')->on('empleados');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proyectos');
    }
}
