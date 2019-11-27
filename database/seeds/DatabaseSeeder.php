<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(){

        $this->call(Departamento_table_seeder::class);
        $this->call(Empleados_table_seeder::class);
        $this->call(Proyecto_table_seeder::class);
        $this->call(ColaboraSeeder::class);
    }
}
