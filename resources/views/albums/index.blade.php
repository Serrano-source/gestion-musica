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
	<h4>Albums</h4>
	<div class="row">
		<div class="col-1x-12">
			
			<form action="">
    			<a href="{{ route('albums.create') }}" class="btn btn-success">Nuevo album</a>
			
			</div> 
			@include('albums.search')
		</div> 
    		</form>
   </div> 

	<div class="col-1x-12">
		<div class="table-responsive">
			<table class="table table-striped">
				<thead>
					<tr>
						<th>Id</th>
						<th>Titulo</th>
						<th>Artista</th>
						<th>Año de salida</th>
						<th>Operacions</th>
					</tr>
				</thead>
				
		<tbody>
			@foreach ($albums as $album)
			<tr>
				<td>{{ $album->id }}</td>
				<td>{{ $album->Titulo }}</td>
				<td>{{ $album->Artista }}</td>
				<td>{{ $album->Añodesalida }}</td>

				<td>
					<a href="{{ route('albums.show',$album->id) }}" class="btn btn-primary">Mostrar</a>


					<a href="{{ route('albums.edit',$album->id) }}" class="btn btn-warning">Actualitzar</a>
				</td>
			</tr>
			
			@endforeach
			
		</tbody>
	</table>
	{{ $albums->links('pagination::bootstrap-4') }}
	<div>
 
</div>
			
			@endsection
 	
 	</body>
 	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
 	</html>

