<?php

use Illuminate\Database\Seeder;

class ColaboraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fecha = date('Y/m/d');
        $fechainicio = strtotime ( "+".rand(1,31)." day" , strtotime ( $fecha ) ) ;
        $fechainicio = date ( 'Y/m/d' , $fechainicio);
  
        $fechafin = strtotime ( "+".rand(30,500)." day" , strtotime ( $fecha ) ) ;
        $fechafin = date ( 'Y/m/d' , $fechafin );
        
        DB::table('colabora')->insert([
           'empleado_id'=>'1',
           'proyecto_id'=>'1',
            'fechainicio' => $fechainicio,
            'fechafinal'  => $fechafin
        ]);
        $fecha = date('Y/m/d');
        $fechainicio = strtotime ( "+".rand(1,31)." day" , strtotime ( $fecha ) ) ;
        $fechainicio = date ( 'Y/m/d' , $fechainicio);
  
        $fechafin = strtotime ( "+".rand(30,500)." day" , strtotime ( $fecha ) ) ;
        $fechafin = date ( 'Y/m/d' , $fechafin );
        
        DB::table('colabora')->insert([
           'empleado_id'=>'2',
           'proyecto_id'=>'2',
            'fechainicio' => $fechainicio,
            'fechafinal'  => $fechafin
        ]);
        $fecha = date('Y/m/d');
        $fechainicio = strtotime ( "+".rand(1,31)." day" , strtotime ( $fecha ) ) ;
        $fechainicio = date ( 'Y/m/d' , $fechainicio);
  
        $fechafin = strtotime ( "+".rand(30,500)." day" , strtotime ( $fecha ) ) ;
        $fechafin = date ( 'Y/m/d' , $fechafin );
        
        DB::table('colabora')->insert([
           'empleado_id'=>'3',
           'proyecto_id'=>'3',
            'fechainicio' => $fechainicio,
            'fechafinal'  => $fechafin
        ]);
        $fecha = date('Y/m/d');
        $fechainicio = strtotime ( "+".rand(1,31)." day" , strtotime ( $fecha ) ) ;
        $fechainicio = date ( 'Y/m/d' , $fechainicio);
  
        $fechafin = strtotime ( "+".rand(30,500)." day" , strtotime ( $fecha ) ) ;
        $fechafin = date ( 'Y/m/d' , $fechafin );
        
        DB::table('colabora')->insert([
           'empleado_id'=>'4',
           'proyecto_id'=>'4',
            'fechainicio' => $fechainicio,
            'fechafinal'  => $fechafin
        ]);
        $fecha = date('Y/m/d');
        $fechainicio = strtotime ( "+".rand(1,31)." day" , strtotime ( $fecha ) ) ;
        $fechainicio = date ( 'Y/m/d' , $fechainicio);
  
        $fechafin = strtotime ( "+".rand(30,500)." day" , strtotime ( $fecha ) ) ;
        $fechafin = date ( 'Y/m/d' , $fechafin );
        
        DB::table('colabora')->insert([
           'empleado_id'=>'5',
           'proyecto_id'=>'5',
            'fechainicio' => $fechainicio,
            'fechafinal'  => $fechafin
        ]);
    }
}
