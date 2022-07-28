<?php

namespace App\Http\Controllers;

use App\Models\categorie;
use App\Models\evenement;
use Illuminate\Http\Request;

class EvenementContoller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('evenement.liste_event', [
            'evenements' => Evenement::all()
        ]);
      }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('evenement.ajout_event', [
            'categories' => Categorie::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Evenement::create([
            'nom' => $request->nom,
            'date' => $request->date,
            'categorie' => $request->categorie,
            'lieu' => $request->lieu,
            'photo' => $request->photo,
        ]);
        return redirect()->route('gestion_event.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('evenement.show', [
            'finds' => Evenement::find($id),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('evenement.edit', [
            'finds' => Evenement::find($id),
        ]);
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
        $evenement = Evenement::find($id);
        $evenement->update($request->all());

        return redirect()->route('gestion_event.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $evenement = Evenement::find($id);
        $evenement->delete();

        return redirect()->route('gestion_event.index');
    }
}
