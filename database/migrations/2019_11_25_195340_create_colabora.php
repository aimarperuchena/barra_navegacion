<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateColabora extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('colabora', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('empleado_id');
            $table->unsignedBigInteger('proyecto_id');
            $table->date('fechainicio');
            $table->date('fechafinal');
            $table->timestamps();

            $table->foreign('empleado_id')->references('id')->on('empleados');
            $table->foreign('proyecto_id')->references('id')->on('proyectos');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('colabora');
    }
}
