@extends('admin.template.main')

@section('nav-title', 'Categorias')
@section('title', 'Categorias')

@section('content')

	<a href="{{ route('admin.categories.create')}}" class="btn btn-info">Crear una nueva Categoria</a><hr>

	<table class="table table-striped active">

		<thead>
			<th>ID</th>
			<th>Nombre</th>
			<th>Acción</th>
		</thead>

		<tbody>
			@foreach ($categories as $category)
				<tr>
					<td>{{ $category->id }}</td>
					<td>{{ $category->name }}</td>
					<td><a href="{{ route('admin.categories.edit', $category->id)}}" class="btn btn-warning glyphicon glyphicon-edit"
							data-toggle="tooltip" title="Editar"></a>

						 <a href="{{ route('admin.categories.destroy', $category->id) }}"
						  data-toggle="tooltip" title="Eliminar" 
						  onclick="return confirm('Seguro que deseas eliminar esta categoria?')" 
						  class="btn btn-danger glyphicon glyphicon-erase"></a>
						 </td>
				</tr>

				
			@endforeach

		</tbody>
	</table>
	</table>
	<div class="text-center">
	{!! $categories->render() !!}
	</div>

@endsection