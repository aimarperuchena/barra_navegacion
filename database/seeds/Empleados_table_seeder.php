<?php

use Illuminate\Database\Seeder;

class Empleados_table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('empleados')->insert([
            'nombre' => 'aimar',
            'apellido' => 'peruchena',
            'email'  =>  'aimarperuchena@gmail.com',
            'telefono'    =>  '12345678'
            
        ]);
        DB::table('empleados')->insert([
            'nombre' => 'paco',
            'apellido' => 'paquito',
            'email'  =>  'paco@gmail.com',
            'telefono'    =>  '12345378'
            
        ]);
    }
}
