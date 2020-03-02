@extends('layouts.Lmaster')
@section('contenido')
	<form action="{{url('/oauth/clients')}}" method="POST">
		@csrf
		 Nombre: <input type="text" name="name">
		 Redirect: <input type="text" name="redirect">
		 <input type="submit" name="Enviar">
	</form>
@endsection
	
