@extends('admin.template.main')

@section('title', 'Tags')
@section('nav-title', 'Tags')


@section('content')

	<a href="{{ route('admin.tags.create')}}" class="btn btn-info">Crear un nuevo Tag</a>

	<!--- BUSCADOR -->
			{!! Form::open(['route' => 'admin.tags.index', 'method' => 'GET', 'class' => 'navbar-form pull-right', 'aria-describedby' => 'search'])!!}

				<div class="input-group">
					
					{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Buscar tags...','aria-describedby' => 'search']) !!}
					<span class="input-group-addon" id="search"> 
						<span class="glyphicon glyphicon-search" aria-hidden="true">
						</span>
					</span>

				</div>


			{!! Form::close() !!}
	<!--- FIN DEL BUSCADOR -->
	<hr>

	<table class="table table-striped active">

		<thead>
			<th>ID</th>
			<th>Nombre</th>
			<th>Acción</th>
		</thead>

		<tbody>
			@foreach ( $tags as $tag)
				<tr>
					<td>{{ $tag->id }}</td>
					<td>{{ $tag->name }}</td>
					<td><a href="{{ route('admin.tags.edit', $tag->id)}}" class="btn btn-warning glyphicon glyphicon-edit"
							data-toggle="tooltip" title="Editar"></a>

						 <a href="{{ route('admin.tags.destroy', $tag->id) }}"
						  data-toggle="tooltip" title="Eliminar" 
						  onclick="return confirm('Seguro que deseas eliminar este Tag?')" 
						  class="btn btn-danger glyphicon glyphicon-erase"></a>
						 </td>
				</tr>

				
			@endforeach

		</tbody>
	</table>
	</table>
	<div class="text-center">
	{!! $tags->render() !!}
	</div>

@endsection