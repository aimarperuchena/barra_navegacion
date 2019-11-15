<?php

use Illuminate\Database\Seeder;

class Departamento_table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departamentos')->insert([
            'nombre' => ('departamento1')
        ]);

        DB::table('departamentos')->insert([
            'nombre' => 'departamento2'
        ]);
        DB::table('departamentos')->insert([
            'nombre' => 'departamento3'
        ]);
        DB::table('departamentos')->insert([
            'nombre' => 'departamento4'
        ]);
        DB::table('departamentos')->insert([
            'nombre' => 'departamento5'
        ]);
        DB::table('departamentos')->insert([
            'nombre' => 'departamento6'
        ]);
    }
}
