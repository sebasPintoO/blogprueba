@extends('admin.template.main')

@section('tittle', 'Login')
@section('tittle-nav', 'Login')

@section('content')

	{!! Form::open(['rout' => 'admin.auth.login', 'method' => 'POST']) !!}
		<div class="form-group">
		{!! Form::label('email', 'Correo Electronico') !!}
		{!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'ejemplo@dominio.com']) !!}
		</div>

		<div class="form-group">
		{!! Form::label('password', 'Contraseña') !!}
		{!! Form::password('password', ['class' => 'form-control', 'placeholder' => '********']) !!}
		</div>

		<div class="form-group">
		{!! Form::submit('Iniciar Sesion', ['class' => 'btn btn-primary']) !!}
		</div>


	{!! Form::close() !!}

@endsection