@extends('layouts.Lmaster')
@section('contenido')
      <table>
      	<thead>
      		<td>Id</td>
      		<td>Nombre</td>
      		<td>Correo</td>
      	</thead>
      	<tbody>
          @foreach($dependencias as $depen)
               <tr>
               		<td>{{ $depen->depe_depe }}</td>
               		<td>{{ $depen->depe_nombre }}</td>
                	<td>{{ $depen->depe_email }}</td>
               		<td>
               			<button><a href="">Editar</a></button>
               			<form>
               				<input type="submit" value="Eliminar">
               			</form>
               		</td>
               	</tr>

          @endforeach
      	</tbody>
      </table>
 @endsection