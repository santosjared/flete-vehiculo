@extends('master')

<?php $i=1; ?>

@section('cuerpo')
<h3>Lista de vehiculos</h3>

<table class='table table-bordered border-dark'>
	<thead>
		<tr class="table-warning border-dark">
			<th>Nro.</th>
			<th>Marca</th>
			<th>Placa</th>
			<th>Modelo</th>
			<th>Nro. pasajeros</th>
			<th>Kilometraje</th>
			<th>Costo</th>
			<th>Estado</th>
			<th>Acciones</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($vehiculos as $vehiculo)
		<tr class="table-info border-dark">
			<td>{{ $i++ }}</td>
			<td>{{ $vehiculo->marca }}</td>
			<td>{{ $vehiculo->placa }}</td>
			<td>{{ $vehiculo->modelo }}</td>
			<td>{{ $vehiculo->pasajeros }}</td>
			<td>{{ $vehiculo->kilometraje }}</td>
			<td>{{ $vehiculo->monto }}</td>
			<td>{{ $vehiculo->estados->first()->nombre}}</td>
			<td>{{ Html::link(route('vehiculo_editar',['id'=>$vehiculo->id]),'Editar',['class'=>'btn btn-info'])}}
			{{ Html::link(route('vehiculo_eliminar',['id'=>$vehiculo->id]),'Eliminar',['class'=>'btn btn-danger'])}}
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
@endsection