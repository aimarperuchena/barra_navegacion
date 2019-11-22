@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Empleados</h2>

    <table>
      <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Apellido</th>
      </tr>

      @if (count($empleados)>0)
        @foreach($empleados as $empleado)
          <tr>
            <td><a href="/empleados/{{$empleado->id}}">{{$empleado->id}}</a></td>
            <td>{{$empleado->nombre}}</td>
            <td>{{$empleado->apellido}}</td>
          </tr>
        @endforeach
    @endif
    </table>

@endsection
