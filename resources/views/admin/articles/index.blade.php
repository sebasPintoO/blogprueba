@extends('admin.template.main')

@section('nav-title', 'Artículos')
@section('title', 'Artículos')

@section('content')

	<a href="{{ route('admin.articles.create')}}" class="btn btn-info">Crear un nuevo Artículo</a><hr>

	<!--- BUSCADOR -->
			{!! Form::open(['route' => 'admin.articles.index', 'method' => 'GET', 'class' => 'navbar-form pull-right', 'aria-describedby' => 'search'])!!}

				<div class="input-group">
					
					{!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Buscar artículos...','aria-describedby' => 'search']) !!}
					<span class="input-group-addon" id="search"> 
						<span class="glyphicon glyphicon-search" aria-hidden="true">
						</span>
					</span>

				</div>


			{!! Form::close() !!}
	<!--- FIN DEL BUSCADOR -->

	<table class="table table-striped active">

		<thead>
			<th>ID</th>
			<th>Título</th>
			<th>Categoría</th>
			<th>Creado por</th>
			<th>Acción</th>
		</thead>

		<tbody>
			@foreach ($articles as $article)
				<tr>
					<td>{{ $article->id }}</td>
					<td>{{ $article->title }}</td>
					<td>{{ $article->category->name}}</td>
					<td>{{ $article->user->name}}</td>
					<td><a href="{{ route('admin.articles.edit', $article->id)}}" class="btn btn-warning glyphicon glyphicon-edit"
							data-toggle="tooltip" title="Editar"></a>

						 <a href="{{ route('admin.articles.destroy', $article->id) }}"
						  data-toggle="tooltip" title="Eliminar" 
						  onclick="return confirm('Seguro que deseas eliminar este artículo?')" 
						  class="btn btn-danger glyphicon glyphicon-erase"></a>
						 </td>
				</tr>

				
			@endforeach

		</tbody>
	</table>
	</table>
	<div class="text-center">
	{!! $articles->render() !!}
	</div>

@endsection