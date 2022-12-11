<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', function () {
    return view('welcome');
});

//Rutas de albums


Route::get('/albums', [App\Http\Controllers\AlbumController::class, 'index'])->name('albums.index');
Route::get('/albums/show/{id}', [App\Http\Controllers\AlbumController::class, 'show'])->name('albums.show');
Route::get('/albums/create/', [App\Http\Controllers\AlbumController::class, 'create'])->name('albums.create');
Route::post('/albums/store', [App\Http\Controllers\AlbumController::class, 'store'])->name('albums.store');

Route::get('/albums/destroy/{id}', [App\Http\Controllers\AlbumController::class, 'destroy'])->name('albums.destroy');

Route::get('/albums/edit/{id}', [App\Http\Controllers\AlbumController::class, 'edit'])->name('albums.edit');

Route::post('/albums/update/{id}', [App\Http\Controllers\AlbumController::class, 'update'])->name('albums.update');


//Rutas de artistas

Route::get('/artistas', [App\Http\Controllers\ArtistaController::class, 'index'])->name('artistas.index');
Route::get('/artistas/show/{id}', [App\Http\Controllers\ArtistaController::class, 'show'])->name('artistas.show');

Route::get('/artistas/create/', [App\Http\Controllers\ArtistaController::class, 'create'])->name('artistas.create');

Route::post('/artistas/store', [App\Http\Controllers\ArtistaController::class, 'store'])->name('artistas.store');

Route::get('/artistas/destroy/{id}', [App\Http\Controllers\ArtistaController::class, 'destroy'])->name('artistas.destroy');

Route::get('/artistas/edit/{id}', [App\Http\Controllers\ArtistaController::class, 'edit'])->name('artistas.edit');

Route::post('/artistas/update/{id}', [App\Http\Controllers\ArtistaController::class, 'update'])->name('artistas.update');





//Rutas de canciones

Route::get('/canciones', [App\Http\Controllers\CancionController::class, 'index'])->name('canciones.index');
Route::get('/canciones/show/{id}', [App\Http\Controllers\CancionController::class, 'show'])->name('canciones.show');
Route::get('/canciones/create', [App\Http\Controllers\CancionController::class, 'create'])->name('canciones.create');

Route::post('/canciones/store', [App\Http\Controllers\CancionController::class, 'store'])->name('canciones.store');

Route::get('/canciones/destroy/{id}', [App\Http\Controllers\CancionController::class, 'destroy'])->name('canciones.destroy');

Route::get('/canciones/edit/{id}', [App\Http\Controllers\CancionController::class, 'edit'])->name('canciones.edit');

Route::post('/canciones/update/{id}', [App\Http\Controllers\CancionController::class, 'update'])->name('canciones.update');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/webSegura', function () {
	return "Estas autentificat!!";
})->middleware('auth'); //això protegeix la ruta

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
