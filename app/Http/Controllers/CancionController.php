<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cancion;

class CancionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $filters = $request->all('searchNombredelcancion');

        $query = Cancion::Query();

        if ($request->has('searchNombredelcancion')) {
            $query->where('Nombredelcancion','like','%'.$filters['searchNombredelcancion'].'%');
          }

        $cancions = $query->paginate(5)->withQueryString();
        return view('canciones.index',compact('cancions','filters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("canciones.create");
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
        $cancions = new Cancion;
        $cancions->Nombredelcancion=$request->input('Nombredelcancion');
        $cancions->Duraciondelacancion=$request->input('Duraciondelacancion');
        $cancions->Reproducciones=$request->input('Reproducciones');
        return redirect()->route('canciones.index');
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
        $cancions = Cancion::findOrFail($id);
        // carreguem la vista i li passem la cancion que volem visualitzar
        return view('canciones.show',compact('cancions'));
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
        $cancions = Cancion::findOrFail($id);
        return view('canciones.edit',compact('cancions'));
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
        $cancions = Cancion::findOrFail($id);
        $cancions->Nombredelcancion=$request->input('Nombredelcancion');
        $cancions->Duraciondelacancion=$request->input('Duraciondelacancion');
        $cancions->Reproducciones=$request->input('Reproducciones');
        return redirect()->route('canciones.index');
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
        $cancions=Cancion::findOrFail($id);
        $cancions->delete();
        return redirect()->route('canciones.index');
    }
}
