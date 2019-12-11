@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Departamentos</h2>

 

<table>
  <tr>
    <th>Id</th>
    <th>Nombre</th>
    <th>Empleados</th>
    <th>Jefe</th>
  </tr>
  @foreach($departamentos as $departamento)
  <tr>
    <td><a href="{{route('departamentos.show', $departamento->id)}}">{{$departamento->id}}</a></td>
    <td>{{$departamento->nombre}}</td>
    <td>
      @foreach($departamento->empleados as $empleado)
        <a href="{{route('empleados.show', $empleado->id)}}">{{$empleado->nombre}}</a>,  
      @endforeach
    </td>
    <td>
      @if(!is_null($departamento->jefe))
        <a href="{{route('empleados.show', $departamento->jefe->id)}}">{{$departamento->jefe->nombre}}</a>  
      @endif
    </td>
  </tr>
  @endforeach
</table>
@endsection
