@extends('master')
<?php $i=0; ?>

@section('estilo')
h3 {
	color:black;
}
@endsection

@section('cuerpo')
<h3><center>LISTA DE CLIENTES ACTUALES</center></h3>
<table class='table table-bordered border-dark'>
	<tr class="table-warning border-dark">
		<th>Nro.</th>
		<th>Nombres</th>
		<th>C.I.</th>
		<th>Opciones</th>
	</tr>
	@foreach ($clientes as $cliente)
	<tr class="table-info border-dark">
		<td>{{ ++$i }}</td>
		<td>{{ $cliente->nombres }}</td>
		<td>{{ $cliente->ci }}</td>
		<td>
			{{ Html::link(route('cliente_mostrar', ['id'=>$cliente->id]), 'Detalles',['class'=>'btn btn-primary']) }} |
			{{ Html::link(route('cliente_editar', ['id'=>$cliente->id]), 'Editar',['class'=>'btn btn-info']) }} |
			{{ Html::link(route('cliente_eliminar', ['id'=>$cliente->id]), 'Eliminar',['class'=>'btn btn-danger']) }} |
			{{ Html::link(route('flete_nuevo', ['id'=>$cliente->id]), 'Nuevo Flete',['class'=>'btn btn-success']) }}
		</td>
	</tr>
	@endforeach
</table>
@endsection

@section('titulo')
	@parent
	- Lista de usuarios
@endsection

@section('script')

@endsection