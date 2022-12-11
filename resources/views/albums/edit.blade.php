@extends('plantilla')
@section('content')

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>

	<div class="container">
		<h4>Editar album</h4>
		<div class="row">
			<div class="col-1x-12">
				<form action="{{ route('albums.update',$albums->id) }}" method="POST">
					@csrf
					<div class="form-group">
						<strong>Titulo:</strong>
	   					 <input type="text" name="Titulo" value="{{ $albums->Titulo }}">
					</div>
					<div class="form-group">
						<strong>Artista:</strong>
						<input type="text" name="Artista" value="{{ $albums->Artista }}">
					</div>
					<div class="form-group">
						 <strong>Año de salida</strong>
	    				<input type="text" name="Añodesalida" value="{{ $albums->Añodesalida }}">
					</div>
					<div class="form-group">
						<input type="submit" class="btn btn-primary" value="Guardar">
						<input type="reset" class="btn btn-default" value="Cancelar">
						<a href="javascript:history.back()">Ir al listado</a>
					</div>
					
				</form>
			</div>
		</div>
	</div>
	@endsection
<!--
	<div>
	<a href="{{ route('albums.index') }}"> Tornar</a>
</div>          
<div> 
	@if ($errors->any())
	<ul>
	    @foreach ($errors->all() as $error)
	    	<li>{{ $error }}</li>
	    @endforeach
	</ul>        
        @endif
</div>
<div>
	<form action="{{ route('albums.update',$albums->id) }}" method="POST">
	    @csrf
	    @method('POST')
	    <strong>Titulo:</strong>
	    <input type="text" name="Titulo" value="{{ $albums->Titulo }}"><br>
	    <strong>Año de salida</strong>
	    <input type="text" name="Añodesalida" value="{{ $albums->Añosdesalida }}">
	            
	    <input type="submit" value="Actualitzar">            
	   
	</form>
</div>


	-->

</body>
</html>