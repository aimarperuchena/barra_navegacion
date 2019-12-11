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
    $departamentos = Departamento::where('id', '=', $id)->get();
    return view('departamentos/show')->with(['departamentos' => $departamentos]);
  }
}
