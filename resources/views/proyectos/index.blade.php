@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Proyectos</h2>

    <table>
      <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Titulo</th>
        <th>Editar</th>
        <th>Eliminar</th>
      </tr>

      @if (count($proyectos)>0)
        @foreach($proyectos as $proyecto)
          <tr>
            <td><a href="/proyectos/{{$proyecto->id}}">{{$proyecto->id}}</a></td>
            <td>{{$proyecto->nombre}}</td>
            <td>{{$proyecto->titulo}}</td>
            <td><a href="/proyectos/editar/{{$proyecto->id}}">Editar</a></td>
            <td><a href="/proyectos/eliminar/{{$proyecto->id}}">Eliminar</a></td>
          </tr>
        @endforeach
    @endif
    </table>

@endsection
