@extends('plantilla')
@section('body')
<div class="form"  style="margin-left: 10%;">
<h3>Edicion de cliente {{ $cliente->nombres }}</h3>
C.I.: {{ $cliente->ci }}<br>
{{ Form::open(['route'=>['cliente_actualizar', 'id'=>$cliente->id], 'method'=>'post']) }}
	Celular: {{ Form::number('celular', $cliente->celular,['class'=>'form-control']) }}<br>
	Direccion: {{ Form::text('direccion', $cliente->direccion, ['class'=>'form-control', 'required'=>true]) }}<br>
	{{ Form::submit('Guardar',['class'=>'btn btn-primary']) }}
	{{ Form::reset('Borrar',['class'=>'btn btn-info']) }}
	{{Html::link(route('cliente_index'),'cancelar',['class'=>'btn btn-warning'])}}
{{ Form::close() }}
</div>
@endsection
