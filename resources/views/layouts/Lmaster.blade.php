<!DOCTYPE html>
<html>
<head>
	<title>Curso de Laravel</title>
</head>
<body>
	<ul>
		<li><a href="{{route('clientes')}}"> Clientes</a></li>
		<li><a href="{{route('dependencias.create')}}">Crear Dependencias</a></li>
		<li><a href="{{route('dependencias.index')}}">Lista de dependencias</a></li>
	</ul>
	@yield('contenido')

</body>
</html>