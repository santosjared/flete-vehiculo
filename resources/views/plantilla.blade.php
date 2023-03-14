<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<title>
		@section('titulo')
			SISFLE
		@show
	</title>
	<style type="text/css">
	.auto {
		border-radius: 30px;
	}
	@section('estilo')
	@show
	</style>
	{{ Html::style(asset('css/estilo.css')) }}
	{{ Html::style(asset('css/bootstrap-5.0.2-dist/css/bootstrap.min.css')) }}
	{{ Html::script(asset('js/funciones.js')) }}
</head>
<body>
<header><h4>FLETE DE VEHICULOS</h4></header>
<nav>@yield('body')</nav>
<footer><center>copyright 2022 email:santosjared221234@gmail.com telefono:72381722
      <div>Developer: SANTOS MACHACA LOPEZ</div>
      <div>R.U.: 74797</div>
      <div>C.I.: 10531753</div>

    </center></footer>
</body>
</html>
