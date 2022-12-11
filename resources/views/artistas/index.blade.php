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

	<div>
		@if (session('success'))
			{{ session('success')}}

			@endif

		@if (session('error'))
			{{ session('error')}}
			@endif
</div>

<div class="container">
	<h4>Artistas</h4>
	<div class="row">
		<div class="col-1x-12">
			<form action="">
				<a href="{{route('artistas.create') }}" class="btn btn-success">Nuevo artista</a>
			</form>
		</div>
		@include('artistas.search')
	</div>
</div>

<div class="col-1x-12">
	<div class="table-responsive">
		<table class="table table-striped">
			<thead>
			<tr>
				<th>Id</th>
				<th>Nombre del artista</th>
				<th>Discografia</th>
				<th>Operacions</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($artistas as $artista)
			<tr>
				<td>{{ $artista->id }}</td>
				<td>{{ $artista->Nombredelartista }}</td>
				<td>{{ $artista->Discografia }}</td>

				<td>
					<a href="{{ route('artistas.show',$artista->id) }} " class="btn btn-primary">Mostrar</a>

					<a href="{{ route('artistas.edit',$artista->id) }}" class="btn btn-warning">Actualitzar</a>
				</td>
			</tr>
			@endforeach
		
			
		</tbody>
	</table>
	{{ $artistas->links('pagination::bootstrap-4') }}
		
	</div>
</div>
@endsection
</body>
</html>