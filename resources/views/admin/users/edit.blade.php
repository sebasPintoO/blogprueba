@extends('admin.template.main')

@section('nav-title','Editar Usuario ' . $user->name)
@section('title', 'Editar Usuario ' . $user->name)


@section('content')


	{!! Form::open(['route' => ['admin.users.update', $user], 'method' => 'PUT']) !!}

		<div class="form-group">
			{!! Form::label('name', 'Nombre') !!}
			{!! Form::text('name', $user->name, ['class' => 'form-control', 'required', 'placeholder' => 'Nombre Completo'] ) !!}
		</div>

		<div class="form-group">
			{!! Form::label('email', 'Correo Electrónico') !!}
			{!! Form::email('email', $user->email, ['class' => 'form-control', 'required', 'placeholder' => 'ejemplo@dominio.com'] ) !!}
		</div>

		<div>			
			@if($user->type == "admin")
							El usuario es
							<span class="label label-danger">Administrador</span>
						@else
							El usuario es 
							<span class="label label-primary">Miembro</span>
						@endif	
		</div><br>

		<div class="form-group">
			{!! Form::label('type', 'Tipo') !!}
			{!! Form::select('type', ['member' => 'Miembro', 'admin' => 'Administrador'], null , ['class' => 'form-control','placeholder' => 'Seleccione una opción', 'required']) !!}
			
		</div>

		<div class="form-group">
			{!! Form::submit('Editar', ['class' => 'btn btn-primary']) !!}

		</div>
			

	{!! Form::close() !!}


@endsection