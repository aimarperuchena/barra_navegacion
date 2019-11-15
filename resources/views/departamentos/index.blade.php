@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Departamentos</h2>

  <table>
    <tr>
      <th>Id</th>
      <th>Nombre</th>
    </tr>
    @if (count($departamentos)>0)
        @foreach($departamentos as $departamento)
          <tr>
            <td>{{$departamento->id}}</a></td>
            <td>{{$departamento->nombre}}</td>
          </tr>
        @endforeach
    @endif

  </table>

@endsection
