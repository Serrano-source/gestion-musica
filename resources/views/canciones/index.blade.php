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
	<h4>Canciones</h4>
	<div class="row">
		<div class="col-1x-12">
			<form action="">
    			<a href="{{ route('canciones.create') }}" class="btn btn-success">Añadir Canciones</a>
			</div> 
		</div> 
		
    		</form>
			@include('canciones.search')
   </div> 

	<div class="col-1x-12">
		<div class="table-responsive">
			<table class="table table-striped">
				<thead>
					<tr>
						<th>Id</th>
						<th>Nombre de la cancion</th>
						<th>Duracion de la cancion</th>
						<th>Reproducciones</th>
						<th>Operacions</th>
					</tr>
				</thead>

		<tbody>
			@foreach ($cancions as $cancion)
			<tr>
				<td>{{ $cancion->id }}</td>
				<td>{{ $cancion->Nombredelcancion }}</td>
				<td>{{ $cancion->Duraciondelacancion }}</td>
				<td>{{ $cancion->Reproducciones }}</td>

				<td>
					<a href="{{ route('canciones.show',$cancion->id) }}" class="btn btn-primary">Mostrar</a>

					<a href="{{ route('canciones.edit',$cancion->id) }}" class="btn btn-warning">Actualitzar</a>
				</td>
			</tr>

			@endforeach
			
			
		</tbody>
	</table>
	{{ $cancions->links('pagination::bootstrap-4') }}
	@endsection
 	</body>
 	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
 	</html>

