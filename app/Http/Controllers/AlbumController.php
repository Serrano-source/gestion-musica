<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Album;
use Illuminate\Support\Facades\DB;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
        $filters = $request->all('searchTitulo');

        $query = Album::Query();

        if ($request->has('searchTitulo')) {
            $query->where('Titulo','like','%'.$filters['searchTitulo'].'%');
          }
        //
        $albums = $query->paginate(5)->withQueryString();

        return view('albums.index',compact('albums','filters'));

  // $filters = $request->all('searchTitulo');

       /// $query = Album::with('artista');

       // if ($request->has('searchTitulo')) {
          //  $query->where('Titulo','like','%'.$filters['searchTitulo'].'%');
         // }
        //
       // $albums = $query->paginate(5)->withQueryString();

       // $albums = Album::Paginate(3);
       // return view('albums.index',compact('albums','filters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('albums.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $albums = new Album;
        $albums->Titulo=$request->input('Titulo');
        $albums->Artista=$request->input('Artista');
        $albums->Añodesalida=$request->input('Añodesalida');
        $albums->save();
        return redirect()->route('albums.index')->with('success','Album creado Satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        // Obtenim un objecte Album a partir del seu id
        $albums = Album::findOrFail($id);
        // carreguem la vista i li passem el planeta que volem visualitzar
        return view('albums.show',compact('albums'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $albums = Album::findOrFail($id);
        return view('albums.edit',compact('albums'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       $albums = Album::findOrFail($id);
       $albums->Titulo = $request->input('Titulo');
       $albums->Artista = $request->input('Artista');
       $albums->Añodesalida = $request->input('Añodesalida');
       $albums->save();

       return redirect()->route("albums.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $albums=Album::findOrFail($id);
        $albums->delete();
        return redirect()->route('albums.index');
    }
}
