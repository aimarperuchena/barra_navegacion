<?php

use Illuminate\Database\Seeder;

class Proyecto_table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('proyectos')->insert([
            'nombre' => 'nombre_pryecto_1',
            'titulo' => 'titulo_proyecto1',
            'fechainicio'  =>  '2010/10/15',
            'fechafin'    =>  '2010/10/16',
            'horasestimadas' => '10'
        ]);
        DB::table('proyectos')->insert([
            'nombre' => 'nombre_pryecto_2',
            'titulo' => 'titulo_proyecto2',
            'fechainicio'  =>  '2010/10/13',
            'fechafin'    =>  '2010/10/14',
            'horasestimadas' => '20'
        ]);
    }
}
