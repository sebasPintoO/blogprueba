@extends('admin.template.main')

@section('nav-title','Crear Usuario')
@section('title', 'Crear Usuario')


@section('content')
	

	{!! Form::open(['route' => 'admin.users.store', 'method' => 'POST']) !!}

		<div class="form-group">
			{!! Form::label('name', 'Nombre') !!}
			{!! Form::text('name', null, ['class' => 'form-control', 'required', 'placeholder' => 'Nombre Completo'] ) !!}
		</div>

		<div class="form-group">
			{!! Form::label('email', 'Correo Electrónico') !!}
			{!! Form::email('email', null, ['class' => 'form-control', 'required', 'placeholder' => 'ejemplo@dominio.com'] ) !!}
		</div>

		<div class="form-group">
			{!! Form::label('password', 'Contraseña') !!}
			{!! Form::password('password', ['class' => 'form-control', 'required', 'placeholder' => '*********'] ) !!}

		</div>

		<div class="form-group">
			{!! Form::label('type', 'Tipo') !!}
			{!! Form::select('type', ['member' => 'Miembro', 'admin' => 'Administrador'], null , ['class' => 'form-control','placeholder' => 'Seleccione una opción','required']) !!}
			
		</div>

		<div class="form-group">
			{!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}

		</div>
			

	{!! Form::close() !!}


@endsection