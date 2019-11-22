@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')
    <table>
    <tr>
    <th>Id</th>
    <th>Nombre</th>
    <th>Apellido</th>
    <th>Email</th>
    <th>Telefono</th>
    </tr>
       @if(count($empleados)>0)
       @foreach($empleados as $empleado)
       <tr>
            <td>{{$empleado->id}}</td>
            <td>{{$empleado->nombre}}</td>
            <td>{{$empleado->apellido}}</td>
            <td>{{$empleado->email}}</td>
            <td>{{$empleado->telefono}}</td>
            @if(!is_null($empleado->proyecto))
            <td>{{$empleado->proyecto->nombre}}</td>
            @endif

          </tr>
       @endforeach
       @endif
    </table>
    @endsection