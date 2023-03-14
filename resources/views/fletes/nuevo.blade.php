@extends('plantilla')
@section('titulo')
flete de vihiculo
@endsection

@section('body')
<div class="form" style="margin-left: 10%;">
<h3>Flete de vehiculo</h3>
{{ $cliente->nombres }}<br>
{{ Form::open(['route'=>['flete_guardar', 'id'=>$cliente->id], 'method'=>'post']) }}
	Fecha de inicio: {{ Form::datetime('inicio', date('Y-m-d H:i:s'),['class'=>'form-control']) }}<br>
	Fecha de devolución: {{ Form::datetime('fin', date('Y-m-d H:i:s'),['class'=>'form-control']) }}<br>
	Pago: {{ Form::number('pago', '0',['class'=>'form-control']) }}<br>
	@foreach ($vehiculos as $vehiculo)

		@if ($vehiculo->estados->sortBy('created_at')->last()->nombre == 'Activo')
			<input type="checkbox" name="vehiculos[]" value="{{ $vehiculo->id }}">
			{{ $vehiculo->marca.', '.$vehiculo->modelo.', de '.$vehiculo->pasajeros.' pasajeros'.' flete a Bs. '.$vehiculo->monto }}<br>
		@endif


	@endforeach
	{{ Form::submit('Guardar',['class'=>'btn btn-primary']) }}
	{{ Form::reset('Borrar',['class'=>'btn btn-info']) }}
{{ Form::close() }}
</div>
@endsection