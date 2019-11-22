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
            'telefono'    =>  '12345678',
            'departamento_id'=>'1'
            
            
        ]);
        DB::table('empleados')->insert([
            'nombre' => 'paco',
            'apellido' => 'paquito',
            'email'  =>  'paco@gmail.com',
            'telefono'    =>  '12345378',
            'departamento_id'=>'2'
        ]);
        DB::table('empleados')->insert([
            'nombre' => 'paco2',
            'apellido' => 'paquito2',
            'email'  =>  'paco@gmail.com',
            'telefono'    =>  '12345378',
            'departamento_id'=>'3'           
        ]);
        DB::table('empleados')->insert([
            'nombre' => 'paco3',
            'apellido' => 'paquito3',
            'email'  =>  'paco@gmail.com',
            'telefono'    =>  '12345378',
            'departamento_id'=>'4'

            
        ]);
        DB::table('empleados')->insert([
            'nombre' => 'paco4',
            'apellido' => 'paquito4',
            'email'  =>  'paco@gmail.com',
            'telefono'    =>  '12345378',
            'departamento_id'=>'5'

            
        ]);
        DB::table('empleados')->insert([
            'nombre' => 'paco5',
            'apellido' => 'paquito5',
            'email'  =>  'paco@gmail.com',
            'telefono'    =>  '12345378',
            'departamento_id'=>'6'

            
        ]);
        DB::table('empleados')->insert([
            'nombre' => 'paco6',
            'apellido' => 'paquito6',
            'email'  =>  'paco@gmail.com',
            'telefono'    =>  '12345378',
            'departamento_id'=>'1'

            
        ]);
        DB::table('empleados')->insert([
            'nombre' => 'paco7',
            'apellido' => 'paquito7',
            'email'  =>  'paco@gmail.com',
            'telefono'    =>  '12345378',
            'departamento_id'=>'2'

            
        ]);
        DB::table('empleados')->insert([
            'nombre' => 'paco8',
            'apellido' => 'paquito8',
            'email'  =>  'paco@gmail.com',
            'telefono'    =>  '12345378',
            'departamento_id'=>'3'

            
        ]);
        DB::table('empleados')->insert([
            'nombre' => 'paco9',
            'apellido' => 'paquito9',
            'email'  =>  'paco@gmail.com',
            'telefono'    =>  '12345378',
            'departamento_id'=>'4'

            
        ]);
    }
}
