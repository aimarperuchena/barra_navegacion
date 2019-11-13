<!DOCTYPE html>
<html lang="en">
<head>
	@include('layouts.head')
	<title>@yield('title')</title>
</head>
<body>

    <div class="flex-center position-ref full-height">
        <div class="content">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
  

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="{{route('empleados.index')}}">Empleados </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('proyectos.index')}}">Proyectos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('departamentos.index')}}">Departamentos</a>
      </li>
      
      
    </ul>
    
  </div>
</nav>
            <div class="op">
                @yield('content')
            </div>
        </div>
    </div>

	<footer class="footer">
		@include('layouts.footer')
	</footer>

</body>
</html>
