<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empleado;
use App\Proyecto;
class EmpleadoController extends Controller
{
    public function index(){
        $empleados=Empleado::all();
        return view('empleados/index')->with('empleados',$empleados);
    }

    public function show($id){
      $empleado=Empleado::find($id);
      return view('empleados/show')->with('empleado',$empleado);
    }

    
}
