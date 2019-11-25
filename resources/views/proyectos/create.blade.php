@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')
<form action="{{route('proyectos.store')}}" method="post">
@csrf
  <span>Nombre: </span><input type="text" name="nombre" id="" ><br>
  <span>Titulo: </span><input type="text" name="titulo" id="" ><br>
  <span>Fecha inicio: </span><input type="date" name="fechainicio" id="" ><br>
  <span>Fecha fin: </span><input type="date" name="fechafin" id="" ><br>
  <span>Horas estimadas: </span><input type="text" name="horasestimadas" id="" ><br>
  <span>Empleado</span><select name="empleado" id="">
  @if(count($empleados)>0)
  @foreach($empleados as $empleado)
  <option value="{{$empleado->id}}">{{$empleado->nombre}}</option>
  @endforeach
  @endif
  </select><br>
  <input type="submit" value="Inseratr">
 
  </form>
  
  </select>
  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@endsection
