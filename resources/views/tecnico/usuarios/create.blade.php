@extends('tecnico.template.main')

@section('titulo', 'Administración de Usuarios')

@section('titulo-div', 'Crear Usuario')

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
    
    {!! Form::open(['route' => 'usuarios.store', 'method' => 'POST']) !!}
        <h4>Datos Personales</h4>
        <hr>
        <div class="form-group">
            {!! Form::label('nombres', 'Nombres') !!}
            {!! Form::text('nombres', null, ['class' => 'form-control', 'placeholder' => 'Ingrese los nombres del usuario',  'required']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('apellidos', 'Apellidos') !!}
            {!! Form::text('apellidos', null, ['class' => 'form-control', 'placeholder' => 'Ingrese los apellidos del usuario', 'required']) !!}
        </div>        
        <div class="form-group">
            {!! Form::label('cedula', 'Documento de Identificación') !!}
            {!! Form::text('cedula', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el documento del usuario', 'required']) !!}   
        </div>
        <hr>
        <h4>Ubicación y Area de Trabajo</h4>
        <hr>
         <div class="form-group">
            {!! Form::label('area', 'Area de Trabajo') !!}
            {!! Form::text('idArea', null, ['class' => 'form-control', 'placeholder' => 'Ej: Contabilidad']) !!}
        </div>        
        <div class="form-group">
            {!! Form::label('cargo', 'Cargo del Usuario') !!}
            {!! Form::text('cargo', null, ['class' => 'form-control', 'placeholder' => 'Ej: Auxiliar Contable']) !!}
        </div>
        <hr>
        <h4>Datos de Contacto</h4>
        <hr>
		<div class="form-group">
			{!! Form::label('email', 'Correo Electronico') !!}
			{!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'example@gmail.com', 'required']) !!}
		</div>       
         <div class="form-group">
            {!! Form::label('telefono', 'Telefono') !!}
            {!! Form::text('telefono', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el telefono de contacto del usuario']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('celular', 'Celular') !!}
            {!! Form::text('celular', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el celular del usuario']) !!}
        </div>
        <hr>
        <div class="form-group">
            {!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
        </div>
    {!!  Form::close() !!}

@endsection
