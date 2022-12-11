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
		<h4>Nueva cancion</h4>
		<div class="row">
			<div class="col-1x-12">
				<form action="{{route('canciones.store')}}" method="POST">
					@csrf
					<div class="form-group">
						<label for="Nombredelcancion">Nombre de la cancion</label>
						<input type="text" name="Nombredelcancion" required maxlength="50">
					</div>
					<div class="form-group">
						<label for="Duraciondelacancion">Duracion de la cancion</label>
						<input type="text" name="Duraciondelacancion" required maxlength="50">
					</div>
					<div class="form-group">
						<label for="Reproducciones">Reproducciones</label>
						<input type="text" name="Reproducciones" required maxlength="39">
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


</body>
</html>
