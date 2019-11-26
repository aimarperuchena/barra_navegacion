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
      $fecha = date('Y/m/d');
      $fechainicio = strtotime ( "+".rand(1,31)." day" , strtotime ( $fecha ) ) ;
      $fechainicio = date ( 'Y/m/d' , $fechainicio);

      $fechafin = strtotime ( "+".rand(30,500)." day" , strtotime ( $fecha ) ) ;
      $fechafin = date ( 'Y/m/d' , $fechafin );
      
            DB::table('proyectos')->insert([
                'nombre' => Str::random(10),
                'encargado_id'=>('1'),
                'titulo' => Str::random(20),
                'fechainicio' => $fechainicio,
                'fechafin'  => $fechafin,
                'horasestimadas' => rand(500,3000)
            ]);

            $fecha = date('Y/m/d');
      $fechainicio = strtotime ( "+".rand(1,31)." day" , strtotime ( $fecha ) ) ;
      $fechainicio = date ( 'Y/m/d' , $fechainicio);

      $fechafin = strtotime ( "+".rand(30,500)." day" , strtotime ( $fecha ) ) ;
      $fechafin = date ( 'Y/m/d' , $fechafin );
      
            DB::table('proyectos')->insert([
                'nombre' => Str::random(10),
                'encargado_id'=>('2'),
                'titulo' => Str::random(20),
                'fechainicio' => $fechainicio,
                'fechafin'  => $fechafin,
                'horasestimadas' => rand(500,3000)
            ]);
            $fecha = date('Y/m/d');
      $fechainicio = strtotime ( "+".rand(1,31)." day" , strtotime ( $fecha ) ) ;
      $fechainicio = date ( 'Y/m/d' , $fechainicio);

      $fechafin = strtotime ( "+".rand(30,500)." day" , strtotime ( $fecha ) ) ;
      $fechafin = date ( 'Y/m/d' , $fechafin );
      
            DB::table('proyectos')->insert([
                'nombre' => Str::random(10),
                'encargado_id'=>('3'),
                'titulo' => Str::random(20),
                'fechainicio' => $fechainicio,
                'fechafin'  => $fechafin,
                'horasestimadas' => rand(500,3000)
            ]);
            $fecha = date('Y/m/d');
      $fechainicio = strtotime ( "+".rand(1,31)." day" , strtotime ( $fecha ) ) ;
      $fechainicio = date ( 'Y/m/d' , $fechainicio);

      $fechafin = strtotime ( "+".rand(30,500)." day" , strtotime ( $fecha ) ) ;
      $fechafin = date ( 'Y/m/d' , $fechafin );
      
            DB::table('proyectos')->insert([
                'nombre' => Str::random(10),
                'encargado_id'=>('4'),
                'titulo' => Str::random(20),
                'fechainicio' => $fechainicio,
                'fechafin'  => $fechafin,
                'horasestimadas' => rand(500,3000)
            ]);
            $fecha = date('Y/m/d');
      $fechainicio = strtotime ( "+".rand(1,31)." day" , strtotime ( $fecha ) ) ;
      $fechainicio = date ( 'Y/m/d' , $fechainicio);

      $fechafin = strtotime ( "+".rand(30,500)." day" , strtotime ( $fecha ) ) ;
      $fechafin = date ( 'Y/m/d' , $fechafin );
      
            DB::table('proyectos')->insert([
                'nombre' => Str::random(10),
                'encargado_id'=>('5'),
                'titulo' => Str::random(20),
                'fechainicio' => $fechainicio,
                'fechafin'  => $fechafin,
                'horasestimadas' => rand(500,3000)
            ]);
        
    }
}
