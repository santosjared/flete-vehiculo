@extends('plantilla')
@section('body')
	<table width="95%" border="0" align="center">
		<tr>
			<td colspan="2" align="center">
				{{ Html::image(asset('img/nissan.jpg'),'Auto en mantemiento',  ['class'=>'auto']) }}
			</td>
		</tr>
		<tr>
			<td width="20%" valign="top">
				{{ Html::link(route('cliente_index'), 'Lista de clientes',['class'=>'btn btn-info']) }}<br><br>
				{{ Html::link(route('cliente_nuevo'), 'Nuevo cliente',['class'=>'btn btn-success']) }}<br>
				<hr>
				{{ Html::link(route('vehiculo_index'), 'Lista de vehiculos',['class'=>'btn btn-info']) }}<br><br>
				{{ Html::link(route('vehiculo_nuevo'), 'Nuevo vehiculo',['class'=>'btn btn-success']) }}<br>
			</td> 
			<td>@yield('cuerpo')</td>
		</tr>
	</table>
	@endsection
