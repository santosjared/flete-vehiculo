@extends('plantilla')

@section('body')
<div class="form" style="margin-left: 10%;">
<h3>Edicion de Vehiculo</h3>
{{ Form::open(['route'=>['vehiculo_actualizar','id'=>$vehiculo->id],'method'=>'post']) }}
	Marca: {{ Form::text('marca', $vehiculo->marca, ['class'=>'caja form-control']) }}
	Placa: {{ Form::text('placa',$vehiculo->placa, ['class'=>'caja form-control']) }}
	Modelo: {{ Form::number('modelo',$vehiculo->modelo,['class'=>'form-control']) }}
	Nro. de pasajero: {{ Form::number('pasajeros',$vehiculo->pasajeros,['class'=>'form-control']) }}
	Kilometraje: {{ Form::number('kilometraje', $vehiculo->kilometraje,['class'=>'form-control']) }}
	Monto: {{ Form::text('monto', $vehiculo->monto,['class'=>'form-control']) }}
	<input type="radio" name="estados[]" @if($vehiculo->estados->first()->nombre=="Activo") checked @endif value='1'>Activo
	<input type="radio" name="estados[]" @if($vehiculo->estados->first()->nombre=="Mantenimiento") checked @endif value='2'>Matenimiento
    <input type="radio" name="estados[]" @if($vehiculo->estados->first()->nombre=="Baja") checked @endif value='3'>Baja
    <input type="radio" name="estados[]" @if($vehiculo->estados->first()->nombre=="Ocupado") checked @endif value='4'>Ocupado
    <br>{{ Form::submit('Guardar',['class'=>'btn btn-primary']) }}
	{{ Form::reset('Borrar',['class'=>'btn btn-info']) }}
{{ Form::close() }}
</div>
@endsection