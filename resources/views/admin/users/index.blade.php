@extends('admin.template.main')

@section('nav-title', 'Lista de Usuarios')
@section('title', 'Lista de Usuarios')

@section('content')

	<a href="{{ route('admin.users.create')}}" class="btn btn-info">Registrar un Nuevo Usuario</a><hr>

	<table class="table table-striped active">

		<thead>
			<th>ID</th>
			<th>Nombre</th>
			<th>Email</th>
			<th>Tipo</th>
			<th>Acción</th>
		</thead>
		<tbody>
			@foreach ($users as $user)
				<tr>
					<td>{{ $user->id }}</td>
					<td>{{ $user->name }}</td>
					<td>{{ $user->email }}</td>
					<td>
						@if($user->type == "admin")
							<span class="label label-danger">Administrador</span>
						@else
							<span class="label label-primary">Miembro</span>
						@endif	
					</td>
					<td><a href="{{ route('admin.users.edit', $user->id)}}" class="btn btn-warning glyphicon glyphicon-edit"
							data-toggle="tooltip" title="Editar"></a>

						 <a href="{{ route('admin.users.destroy', $user->id) }}"
						  data-toggle="tooltip" title="Eliminar" 
						  onclick="return confirm('Seguro que deseas eliminar este usuario?')" 
						  class="btn btn-danger glyphicon glyphicon-erase"></a>
						 </td>
				</tr>

				
			@endforeach

		</tbody>
		
	</table>
	<div class="text-center">
	{!! $users->render() !!}
	</div>

@endsection