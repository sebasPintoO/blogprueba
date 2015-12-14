@extends('admin.template.main')

@section('title', 'Agregar Articulo')
@section('nav-title', 'Agregar Articulo')


@section('content')
	{!! Form::open(['route' => 'admin.articles.store', 'method' => 'POST', 'files' => true]) !!}

		<div class="form-group">

			{!! Form::label('title', 'Título') !!}
			{!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Titulo del Artículo...', 'required']) !!}		
		</div>

		<div class="form-group">

			{!! Form::label('category_id', 'Categoría') !!}
			{!! Form::select('category_id', $categories, null, ['class' => 'form-control select-category', 'placeholder' => 'Seleccione una categoria', 'required']) !!}		
		</div>

		<div class="form-group">

			{!! Form::label('content', 'Contenido') !!}
			{!! Form::textarea('content', null, ['class' => 'form-control textarea-content', 'placeholder' => 'Escriba el contenido del artículo', 'required']) !!}		
		</div>

		<div class="form-group">

			{!! Form::label('tags', 'Tags') !!}
			{!! Form::select('tags[]', $tags, null, ['class' => 'form-control select-tag', 'multiple', 'required']) !!}		
		</div>

		<div class="form-group">

			{!! Form::label('image', 'Imagen') !!}
			{!! Form::file('image') !!}		
		</div>

		<div class="form-group">

			{!! Form::submit('Agregar Artículo', ['class' => 'btn btn-primary']) !!}		
		</div>




	{!! Form::close() !!}
	

@endsection
@section('js')
	<script >
		$('.select-tag').chosen({
			placeholder_text_multiple: 'Seleccione máximo 3 tags',
			max_selected_options: 3,
			no_results_text: 'No se encontraron estos Tags'

		});

		$('.select-category').chosen({

		});

		$('.textarea-content').trumbowyg({
			lang: 'es'

		});
	</script>
@endsection

