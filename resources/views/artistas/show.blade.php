@extends('plantilla')
@section('content')

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

	
</head>
<body>
<div class="container">
	<h2>Fitxa Artistas</h2>
		<div class="row">
			<div class="col-1x-12">
				<a href="{{ route('artistas.index') }}" class="btn btn-success"> Tornar</a><br>
				<strong>Nombre del artista:</strong>
				{{  $artista->Nombredelartista }}<br>
				<strong>Discografia:</strong>
				{{ $artista->Discografia }}<br>
					
			</div>
		</div>
	</div>
	@endsection


</body>
</html>