<div>
<nav class="navbar navbar-light bg-light">
<form method="GET" action="{{ route('artistas.index')}}" class="form-inline">
	
	<input type="search" name="searchNombredelartista" value="{{ $filters['searchNombredelartista'] }}" placeholder="Artista" class="form-control mr-sm-2">
	
	<input type="submit" value="Cercar" class="btn btn-outline-success my-2 my-sm-0">
</form>
</nav>
</div>