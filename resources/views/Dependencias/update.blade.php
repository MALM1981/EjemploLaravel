@extends('layouts.Lmaster')
@section('contenido')
         <form action="{{route('dependencias.store') }}" method="POST">
         	@csrf
         	Nombre: <input type="text" name="nombre">
         	Correo: <input type="email" name="email">
         	Contraseña: <input type="password" name="password">
         	<input type="submit" value="Guardar">
         </form>
@endsection