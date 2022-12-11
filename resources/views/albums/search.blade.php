<div>
<nav class="navbar navbar-light bg-light">
<form method="GET" action="{{ route('albums.index')}}" class="form-inline">
	
	<input type="search" name="searchTitulo" value="{{ $filters['searchTitulo'] }}" placeholder="Album" class="form-control mr-sm-2">
	
	<input type="submit" value="Cercar" class="btn btn-outline-success my-2 my-sm-0">
</form>
</nav>
</div>