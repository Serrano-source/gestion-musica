<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artista;

class ArtistaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $filters = $request->all('searchNombredelartista');

        $query = Artista::Query();

        if ($request->has('searchNombredelartista')) {
            $query->where('Nombredelartista','like','%'.$filters['searchNombredelartista'].'%');
          }
        //
        $artistas = $query->paginate(5)->withQueryString();

        return view('artistas.index',compact('artistas','filters'));
        
        //$artistas = Artista::Paginate(4);
       // return view('artistas.index',compact('artistas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("artistas.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $artistas = new Artista;
        $artistas->Nombredelartista=$request->input('Nombredelartista');
        $artistas->Discografia=$request->input('Discografia');
        $artistas->save();
        return redirect()->route('artistas.index');
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
        $artista = Artista::findOrFail($id);
        // carreguem la vista i li passem el planeta que volem visualitzar
        return view('artistas.show',compact('artista'));
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
        $artistas = Artista::findOrFail($id);
        return view('artistas.edit',compact('artistas'));
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
        //
        $artistas = Artista::findOrFail($id);
        $artistas->Nombredelartista = $request->input('Nombredelartista');
        $artistas->Discografia = $request->input('Discografia');
        $artistas->save();

        return redirect()->route("artistas.index");
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
        $artistas=Artista::findOrFail($id);
        $artistas->delete();
        return redirect()->route('albums.index');
    }
}
