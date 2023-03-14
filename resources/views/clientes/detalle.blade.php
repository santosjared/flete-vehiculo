@extends('plantilla')

@section('body')
<div class="form"  style="margin-left: 10%;">
<center><h3>Detalle del cliente</h3>
Nombres: {{ $cliente->nombres }}<br>
C.I.: {{ $cliente->ci }}<br>
Direccion: {{ $cliente->direccion }}<br>
Celular: {{ $cliente->celular }}<br>
@if ($cliente->user) 
	Correo electronico: {{ $cliente->user->email }}
@endif
<h5>Fletes</h5>
@foreach($cliente->fletes as $flete)
Marca: {{$flete->vehiculo->marca}}<br>
Placa: {{$flete->vehiculo->placa}}<br>
Modelo: {{$flete->vehiculo->modelo}}<br>
Pago: {{$flete->pago}}<br><br>
@endforeach
<br>
{{ Html::link(route('cliente_index'), 'Volver') }} | 
{{ Html::link(route('cliente_editar', ['id'=>$cliente->id]), 'Editar',['class'=>'btn btn-info']) }} |
<!--{{ Html::link(url('clientes/editar/'.$cliente->id), 'Editar') }}-->
</center>
</div>
@endsection
