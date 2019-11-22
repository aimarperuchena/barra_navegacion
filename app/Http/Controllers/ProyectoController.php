<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proyecto;
use App\Empleado;
use App\Http\Requests\ProyectoRequest;
class ProyectoController extends Controller
{
    public function index(){
        $proyectos = Proyecto::all();
        return view('proyectos/index')->with('proyectos',$proyectos);
      }
      public function show($id){
        $proyecto=Proyecto::find($id);
        return view('proyectos/show')->with('proyecto',$proyecto);
      }

      public function editar($id){
        $proyecto=Proyecto::find($id);
        $empleados=Empleado::all();
        return view('proyectos/editar')->with('proyecto',$proyecto)->with('empleados',$empleados);
      }

      public function update(ProyectoRequest $request){
          $validated=$request->validated();

          $proyecto=Proyecto::find($request->id);
          $proyecto->nombre=$request->nombre;
          $proyecto->titulo=$request->titulo;
          $proyecto->fechainicio=$request->fechainicio;
          $proyecto->fechafin=$request->fechafin;
          $proyecto->horasestimadas=$request->horasestimadas;
          $proyecto->empleado_id=$request->empleado;
          $proyecto->save();
          return redirect(route('proyectos.index'));
      }

      public function eliminar($id){
        $proyecto= Proyecto::find($id);
        $proyecto->delete();
        return redirect(route('proyectos.index'));
      }
}
