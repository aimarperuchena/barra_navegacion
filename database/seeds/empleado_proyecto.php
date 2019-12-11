<?php

use Illuminate\Database\Seeder;

class empleado_proyecto extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('empleado_proyecto')->insert([
            'empleado_id' => '2',
            'proyecto_id'=>'1' 
        ]);
        DB::table('empleado_proyecto')->insert([
            'empleado_id' => '3',
            'proyecto_id'=>'1' 
        ]);

        DB::table('empleado_proyecto')->insert([
            'empleado_id' => '1',
            'proyecto_id'=>'2' 
        ]);
        DB::table('empleado_proyecto')->insert([
            'empleado_id' => '3',
            'proyecto_id'=>'2' 
        ]);
        DB::table('empleado_proyecto')->insert([
            'empleado_id' => '1',
            'proyecto_id'=>'3' 
        ]);
        DB::table('empleado_proyecto')->insert([
            'empleado_id' => '2',
            'proyecto_id'=>'3' 
        ]);
        DB::table('empleado_proyecto')->insert([
            'empleado_id' => '2',
            'proyecto_id'=>'4' 
        ]);
        DB::table('empleado_proyecto')->insert([
            'empleado_id' => '5',
            'proyecto_id'=>'4' 
        ]);
        DB::table('empleado_proyecto')->insert([
            'empleado_id' => '4',
            'proyecto_id'=>'5' 
        ]);
        DB::table('empleado_proyecto')->insert([
            'empleado_id' => '6',
            'proyecto_id'=>'5' 
        ]);
    }
}
