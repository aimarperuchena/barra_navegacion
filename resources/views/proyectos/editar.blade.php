@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')
<form action="{{route('proyectos.update')}}" method="post">
@csrf
  <span>Nombre: </span><input type="text" name="nombre" id="" value="{{$proyecto->nombre}}" readonly><br>
  <span>Titulo: </span><input type="text" name="titulo" id="" value="{{$proyecto->titulo}}"><br>
  <span>Fecha inicio: </span><input type="date" name="fechainicio" id="" value="{{$proyecto->fechainicio}}"><br>
  <span>Fecha fin: </span><input type="date" name="fechafin" id="" value="{{$proyecto->fechafin}}"><br>
  <span>Horas estimadas: </span><input type="text" name="horasestimadas" id="" value="{{$proyecto->horasestimadas}}"><br>
  <span>Empleado</span><select name="empleado" id="">
  @if(count($empleados)>0)
  @foreach($empleados as $empleado)
  <option value="{{$empleado->id}}">{{$empleado->nombre}}</option>
  @endforeach
  @endif
  </select><br>
  <input type="submit" value="Editar">
  <input type="hidden" name="id" value="{{$proyecto->id}}">
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
