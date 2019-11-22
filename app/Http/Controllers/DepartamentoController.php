<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Departamento;
use App\Empleado;
class DepartamentoController extends Controller
{
  public function index(){
    $departamentos = Departamento::all();
    
    return view('departamentos/index')->with('departamentos',$departamentos);
  }

  public function show($id){
    $empleados=Empleado::where('departamento_id',$id)->get();
  return view('departamentos/show')->with('empleados',$empleados);
  }
}
