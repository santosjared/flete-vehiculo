@extends('plantilla')

@section('body')
<nav class="form" style="margin-left: 10%;">
<h3>Datos del cliente nuevo</h3>
{{ Form::open(['method'=>'post', 'route'=>'cliente_guardar']) }}
	{{ Form::label('nombres', 'Nombres: ') }}
	{{ Form::text('nombres', '', ['placeholder'=>'Coloque su nombre', 'required'=>true,'class'=>'form-control']) }}
	{{ Form::label('ci', 'C.I.:') }}
	{{ Form::number('ci','',['class'=>'form-control']) }}
	{{ Form::label('celular', 'Celular:') }}
	{{ Form::number('celular','',['class'=>'form-control']) }}
	{{ Form::label('direccion', 'Direccion: ') }}
	{{ Form::text('direccion', '', ['placeholder'=>'Indique su direccion','class'=>'form-control']) }}
	{{ Form::label('email', 'Correo electronico: ') }}
	{{ Form::email('email', '', ['placeholder'=>'Indique su correo electronico','class'=>'form-control']) }}
	{{ Form::label('password', 'Contraseña: ') }}
	{{ Form::password('password', ['placeholder'=>'Indique su contraseña', 'required'=>true,'class'=>'form-control']) }}<br>
	{{ Form::text('estado','activo',['hidden'])}}
	{{ Form::submit('Guardar',['class'=>'btn btn-primary']) }}
	{{ Form::reset('Borrar',['class'=>'btn btn-dark']) }}
	<input type="button" name="mostrar" value="Mostrar" onclick="alert(mensaje('Amigos'))">
{{ Form::close() }}
</nav>
@endsection