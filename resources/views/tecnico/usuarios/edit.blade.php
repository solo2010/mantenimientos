@extends('tecnico.template.main')
@section('titulo', 'Editar Usuario ' . $usuario->nombres . ' ' . $usuario->apellidos)
@section('titulo-div', 'Editar a ' . $usuario->nombres . ' ' . $usuario->apellidos)
@section('contenido')
	@if(count($errors) > 0)
		<div class="alert alert-danger">
			<ul>
				@foreach($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif

	{!! Form::open(['route' => ['usuarios.update', $usuario->id], 'method' => 'PUT']) !!}
		<h4>Datos Personales</h4>
		<hr>
		<div class="form-group">
			{!! Form::label('nombres', 'Nombres') !!}
			{!! Form::text('nombres', $usuario->nombres, ['class' => 'form-control', 'placeholder' => 'Ingrese los nombres del Usuario', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('apellidos', 'Apallidos') !!}
			{!! Form::text('apellidos', $usuario->apellidos, ['class' => 'form-control', 'placeholder' => 'Ingrese los apellidos del Usuario', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('cedula', 'Documento de Identificación') !!}
			{!! Form::text('cedula', $usuario->cedula, ['class' => 'form-control', 'placeholder' => 'Ingrese el documento del usuario', 'required']) !!}
		</div>
		<hr>
		<h4>Ubiación y Area de Trabajo</h4>
		<hr>
		<div class="form-group">
			{!! Form::label('area', 'Area de Trabajo') !!}
			{!! Form::text('idArea', $usuario->idArea, ['class' => 'form-control', 'placeholder' => 'Ej: Contabilidad']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('cargo', 'Cargo del usuario') !!}
			{!! Form::text('cargo', $usuario->cargo, ['class' => 'form-control', 'placeholder' => 'Ej: Auxiliar Contable']) !!}
		</div>
		<hr>
		<h4>Datos de Contacto</h4>
		<hr>
		<div class="form-group">
			{!! Form::label('email', 'Correo Electronico') !!}
			{!! Form::email('email', $usuario->email, ['class' => 'form-control', 'placeholder' => 'example@gmail.com', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('telefono', 'Telefono') !!}
			{!! Form::text('telefono', $usuario->telefono, ['class' => 'form-control', 'placeholder' => 'Ingrese el telefono de contacto del usuario']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('celular', 'Celular') !!}
			{!! Form::text('celular', $usuario->celular, ['class' => 'form-control', 'placeholder' => 'Ingrese el celular del usuario']) !!}
		</div>
		<hr>
		<div class="form-group">
			{!! Form::submit('Editar', ['class' => 'btn btn-primary']) !!}
		</div>
	{!! Form::close() !!}
@endsection