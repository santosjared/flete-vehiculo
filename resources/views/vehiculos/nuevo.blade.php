@extends('plantilla')

@section('body')
<div class="form" style="margin-left: 10%;">
<h3>Datos del nuevo vehiculo</h3>
{{ Form::open(['route'=>'vehiculo_guardar', 'method'=>'post']) }}
	Marca: {{ Form::text('marca', '', ['placeholder'=>'Marca de vehiculo', 'class'=>'caja form-control']) }}
	Placa: {{ Form::text('placa', '', ['placeholder'=>'Numero de placa', 'class'=>'caja form-control']) }}
	Modelo: {{ Form::number('modelo', date('Y'),['class'=>'form-control']) }}
	Nro. de pasajero: {{ Form::number('pasajeros','',['class'=>'form-control']) }}
	Kilometraje: {{ Form::number('kilometraje', '0',['class'=>'form-control']) }}
	Monto: {{ Form::text('monto', '150',['class'=>'form-control']) }}
	Estados: 
	@foreach ($estados as $estado)
	<input type="radio" name="estados[]" checked value="{{ $estado->id }}">{{ $estado->nombre }}
	<!--<input type="checkbox" name="estados[]" value="{{ $estado->id }}">{{ $estado->nombre }} -->
	@endforeach
	<br>

	{{ Form::submit('Guardar',['class'=>'btn btn-primary']) }}
	{{ Form::reset('Borrar',['class'=>'btn btn-info']) }}
{{ Form::close() }}
</div>
@endsection